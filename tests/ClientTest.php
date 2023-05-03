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

declare(strict_types=1);

namespace CyberSpectrum\PhpTransifex\Tests;

use CyberSpectrum\PhpTransifex\Api;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\Client;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * This tests the transifex client class.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class ClientTest extends TestCase
{
    /** @covers \CyberSpectrum\PhpTransifex\Client::__construct() */
    public function testConstructor(): void
    {
        $client = new Client(
            $this->getMockForAbstractClass(ClientInterface::class),
            $this->getMockForAbstractClass(RequestFactoryInterface::class),
            $this->getMockForAbstractClass(SerializerInterface::class),
            $this->getMockForAbstractClass(StreamFactoryInterface::class),
        );

        self::assertInstanceOf(Client::class, $client);
    }

    /**
     * @covers \CyberSpectrum\PhpTransifex\Client::__construct()
     * @covers \CyberSpectrum\PhpTransifex\Client::parseEndpoint()
     */
    public function testParseEndpoint(): void
    {
        $client = new Client(
            $this->getMockForAbstractClass(ClientInterface::class),
            $this->getMockForAbstractClass(RequestFactoryInterface::class),
            $serializer = $this->getMockForAbstractClass(SerializerInterface::class),
            $this->getMockForAbstractClass(StreamFactoryInterface::class),
        );

        $response  = $this->getMockForAbstractClass(ResponseInterface::class);

        $result = (object) ['success' => true];
        $endpoint = $this->getMockForAbstractClass(Endpoint::class);
        $endpoint->expects(self::once())->method('parseResponse')->with($response, $serializer)->willReturn($result);

        self::assertSame($result, $client->parseEndpoint($endpoint, $response));
    }
}
