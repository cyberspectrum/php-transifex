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

use Http\Client\Common\Plugin\Journal;
use Http\Client\Exception;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * A plugin to remember the last response.
 */
class History implements Journal
{
    /**
     * The last response.
     *
     * @var ResponseInterface
     */
    private $lastResponse;

    /**
     * Retrieve the last response.
     *
     * @return ResponseInterface|null
     */
    public function getLastResponse()
    {
        return $this->lastResponse;
    }

    /**
     * {@inheritDoc}
     */
    public function addSuccess(RequestInterface $request, ResponseInterface $response)
    {
        $this->lastResponse = $response;
    }

    /**
     * {@inheritDoc}
     */
    public function addFailure(RequestInterface $request, Exception $exception)
    {
    }
}
