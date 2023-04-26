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

use CyberSpectrum\PhpTransifex\ApiClient\Middleware\MessageLogger;
use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/** @covers \CyberSpectrum\PhpTransifex\ApiClient\Middleware\MessageLogger */
final class MessageLoggerTest extends TestCase
{
    public function testHandlesRequest(): void
    {
        $logger = $this->getMockForAbstractClass(LoggerInterface::class);

        $request = $this->getMockForAbstractClass(RequestInterface::class);
        $request->method('getHeaderLine')->willReturn('');
        $request->method('getProtocolVersion')->willReturn('');
        $request->method('getMethod')->willReturn('');
        $request->method('getRequestTarget')->willReturn('');
        $response = $this->getMockForAbstractClass(ResponseInterface::class);
        $response->method('getHeaderLine')->willReturn('');
        $response->method('getProtocolVersion')->willReturn('');

        $next = function (RequestInterface $req) use ($request, $response): Promise {
            self::assertSame($request, $req);

            return new FulfilledPromise($response);
        };
        $first = function (): never {
            self::fail('Should not call $first');
        };

        $msgLogger = new MessageLogger($logger, LogLevel::DEBUG);

        $msgLogger->handleRequest($request, $next, $first);
    }

    public function testFormatting(): void
    {
        $logger = $this->getMockForAbstractClass(LoggerInterface::class);

        $msgLogger = new MessageLogger($logger, LogLevel::DEBUG);

        $request = $this->getMockForAbstractClass(RequestInterface::class);
        $request->method('getHeaderLine')->willReturnCallback(fn(string $headerName) => 'req:' . $headerName);
        $request->method('getProtocolVersion')->willReturn('req:protocol-version');
        $request->method('getMethod')->willReturn('req:method');
        $request->method('getRequestTarget')->willReturn('req:target');
        $response = $this->getMockForAbstractClass(ResponseInterface::class);
        $response->method('getHeaderLine')->willReturnCallback(fn(string $headerName) => 'res:' . $headerName);
        $response->method('getProtocolVersion')->willReturn('res:protocol-version');
        $response->method('getStatusCode')->willReturn('res:status-code');

        self::assertSame(
            gethostname() .
            ' req:User-Agent - [' .
            date('d/M/Y:H:i:s O') .
            '] "req:method req:target HTTP/req:protocol-version" res:status-code res:Content-Length',
            $msgLogger->format($request, $response)
        );
    }
}
