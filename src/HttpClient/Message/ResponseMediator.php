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

namespace CyberSpectrum\PhpTransifex\HttpClient\Message;

use Psr\Http\Message\ResponseInterface;

/**
 * This class
 */
class ResponseMediator
{
    /**
     * Convert a response to a content array or string.
     *
     * @param ResponseInterface $response The response.
     *
     * @return array|string
     */
    public static function getContent(ResponseInterface $response)
    {
        $body = $response->getBody()->__toString();
        if (strpos($response->getHeaderLine('Content-Type'), 'application/json') === 0) {
            $content = json_decode($body, true);
            if (JSON_ERROR_NONE === json_last_error()) {
                return $content;
            }
        }

        return $body;
    }

    /**
     * Get the value for a single header.
     *
     * @param ResponseInterface $response The response.
     *
     * @param string            $name     The name of the header.
     *
     * @return string|null
     */
    public static function getHeader(ResponseInterface $response, $name)
    {
        $headers = $response->getHeader($name);

        return array_shift($headers);
    }
}
