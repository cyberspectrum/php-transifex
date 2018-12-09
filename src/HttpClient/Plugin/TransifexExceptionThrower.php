<?php

/**
 * This file is part of cyberspectrum/php-transifex.
 *
 * (c) 2017 Christian Schiffler.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    PhpTransifex
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  2017 Christian Schiffler.
 * @license    https://github.com/cyberspectrum/php-transifex/blob/master/LICENSE MIT
 * @filesource
 */

namespace CyberSpectrum\PhpTransifex\HttpClient\Plugin;

use CyberSpectrum\PhpTransifex\HttpClient\Message\ResponseMediator;
use Http\Client\Common\Exception\ClientErrorException;
use Http\Client\Common\Exception\ServerErrorException;
use Http\Client\Common\Plugin;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Creates exceptions from failed requests.
 */
class TransifexExceptionThrower implements Plugin
{
    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first)
    {
        return $next($request)->then(function (ResponseInterface $response) use ($request) {
            $statusCode = $response->getStatusCode();
            if ($statusCode < 400 || $statusCode >= 600) {
                return $response;
            }

            $content = ResponseMediator::getContent($response);
            $message = isset($content['message']) ? $content['message'] : $content;

            if ($statusCode < 500) {
                throw new ClientErrorException($message, $request, $response);
            }

            throw new ServerErrorException($message, $request, $response);
        });
    }
}
