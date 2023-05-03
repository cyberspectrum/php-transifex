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

namespace CyberSpectrum\PhpTransifex\Tests\ApiClient\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Endpoint\DownloadSourceFile;
use CyberSpectrum\PhpTransifex\ApiClient\Model\DownloadFile;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\Serializer\SerializerInterface;

/** @covers \CyberSpectrum\PhpTransifex\ApiClient\Endpoint\DownloadSourceFile */
final class DownloadSourceFileTest extends TestCase
{
    public function testGettersReturnExpectedValues(): void
    {
        $endpoint = new DownloadSourceFile('https://example.com/down-load-this');

        self::assertSame('GET', $endpoint->getMethod());
        self::assertSame('https://example.com/down-load-this', $endpoint->getUri());
        self::assertSame([[], null], $endpoint->getBody($this->getMockForAbstractClass(SerializerInterface::class)));
        self::assertSame(['Accept' => ['application/vnd.api+json']], $endpoint->getExtraHeaders());
        self::assertSame(['bearerAuth'], $endpoint->getAuthenticationScopes());
    }

    public function transformResponseProvider(): iterable
    {
        yield [
            'filename' => 'unknown',
            'Content-Disposition' => '',
        ];
        yield [
            'filename' => 'foo.bar',
            'Content-Disposition' => 'filename="foo.bar"',
        ];
    }

    /** @dataProvider transformResponseProvider */
    public function testTransformsResponse($filename, $contentDisposition): void
    {
        $stream = $this->getMockForAbstractClass(StreamInterface::class);
        $response = $this->getMockForAbstractClass(ResponseInterface::class);
        $response->expects(self::atLeastOnce())->method('getStatusCode')->willReturn(200);
        $response->expects(self::atLeastOnce())->method('hasHeader')->with('Content-Type')->willReturn(true);
        $response
            ->expects(self::atLeastOnce())
            ->method('getHeader')
            ->with('Content-Type')
            ->willReturn(['application/octet-stream']);
        $response->expects(self::atLeastOnce())->method('getBody')->willReturn($stream);
        $response->expects(self::atLeastOnce())
            ->method('getHeaderLine')
            ->with('Content-Disposition')
            ->willReturn($contentDisposition);

        $serializer = $this->getMockForAbstractClass(SerializerInterface::class);

        $endpoint = new DownloadSourceFile('https://example.com/down-load-this');

        $result = $endpoint->parseResponse($response, $serializer);
        self::assertInstanceOf(DownloadFile::class, $result);
        /** @var DownloadFile $result */
        self::assertSame($filename, $result->getFileName());
        self::assertSame('application/octet-stream', $result->getContentType());
        self::assertSame($stream, $result->getStream());
    }
}
