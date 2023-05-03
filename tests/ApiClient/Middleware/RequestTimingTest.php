<?php

/**
 * This file is part of cyberspectrum/php-transifex.
 *
 * (c) 2017-2023 Christian Schiffler.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    PhpTransifex
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  2023 Christian Schiffler.
 * @license    https://github.com/cyberspectrum/php-transifex/blob/master/LICENSE MIT
 * @filesource
 */

declare(strict_types=1);

namespace CyberSpectrum\PhpTransifex\Tests\ApiClient\Middleware;

use CyberSpectrum\PhpTransifex\ApiClient\Middleware\RequestTiming;
use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

/** @covers \CyberSpectrum\PhpTransifex\ApiClient\Middleware\RequestTiming */
final class RequestTimingTest extends TestCase
{
    public function testHandlesRequest(): void
    {
        $uri = $this->getMockForAbstractClass(UriInterface::class);

        $request = $this->getMockForAbstractClass(RequestInterface::class);
        $request->method('getUri')->willReturn($uri);

        $response = $this->getMockForAbstractClass(ResponseInterface::class);
        $response->expects(self::exactly(4))->method('withHeader')->willReturn($response);

        $next = function (RequestInterface $req) use ($request, $response): Promise {
            self::assertSame($request, $req);

            return new FulfilledPromise($response);
        };
        $first = function (): never {
            self::fail('Should not call $first');
        };

        $timing = new RequestTiming();

        $timing->handleRequest($request, $next, $first);
    }
}
