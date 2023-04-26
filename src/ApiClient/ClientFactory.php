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

namespace CyberSpectrum\PhpTransifex\ApiClient;

use CyberSpectrum\PhpTransifex\ApiClient\Middleware\MessageLogger;
use CyberSpectrum\PhpTransifex\ApiClient\Middleware\RequestTiming;
use CyberSpectrum\PhpTransifex\Client;
use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AddPathPlugin;
use Http\Client\Common\Plugin\RetryPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;
use Jane\Component\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;

/** @SuppressWarnings(PHPMD.CouplingBetweenObjects) */
class ClientFactory
{
    private LoggerInterface $logger;

    /** @var list<Plugin>  */
    private array $basePlugins = [];

    /**
     * Create a new instance.
     *
     * @param list<AuthenticationPlugin> $auth
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger, array $auth)
    {
        $this->logger = $logger;

        $this->basePlugins[] = new HeaderDefaultsPlugin([
            'User-Agent' => 'php-transifex-api (https://github.com/cyberspectrum/php-transifex)',
        ]);
        $this->basePlugins[] = new RetryPlugin(['retries' => 5]);
        $this->basePlugins[] = new MessageLogger(
            $logger,
            LogLevel::DEBUG,
            <<<LOG_LINE
            Request:
            {req_headers}
            {req_body}

            Response:
            {res_headers}
            {res_body}

            LOG_LINE
        );
        $this->basePlugins[] = new MessageLogger(
            $logger,
            LogLevel::INFO,
            '{method} {target} HTTP/{version} {code}' .
            ' [timings: {res_header_X-Duration} ms, ' .
            'min: {res_header_X-Duration-Min} ms, ' .
            'max: {res_header_X-Duration-Max} ms, ' .
            'avg: {res_header_X-Duration-Avg} ms]'
        );
        $this->basePlugins[] = new RequestTiming();
        if (!empty($auth)) {
            $this->basePlugins[] = new AuthenticationRegistry($auth);
        }
    }

    /** @param list<Plugin> $additionalPlugins */
    public function createHttpClient(
        string $uri = 'https://rest.api.transifex.com',
        array $additionalPlugins = []
    ): ClientInterface {
        $plugins = $this->basePlugins;
        if ($uri) {
            $this->logger->debug('Create API client for URI: ' . $uri);
            $uriInstance = Psr17FactoryDiscovery::findUriFactory()->createUri($uri);
            $plugins[] = new AddHostPlugin($uriInstance);
            if ('' !== $uriInstance->getPath()) {
                $plugins[] = new AddPathPlugin($uriInstance);
            }
        }

        if (count($additionalPlugins) > 0) {
            $plugins = array_merge($plugins, $additionalPlugins);
        }

        return new PluginClient(Psr18ClientDiscovery::find(), $plugins);
    }

    /**
     * @param list<Plugin>                                     $additionalPlugins
     * @param array<NormalizerInterface|DenormalizerInterface> $additionalNormalizers
     *
     * @SuppressWarnings(PHPMD.LongVariable)
     */
    public function create(
        ClientInterface $httpClient = null,
        array $additionalPlugins = [],
        array $additionalNormalizers = []
    ): Client {
        if (null === $httpClient) {
            $httpClient = $this->createHttpClient('https://rest.api.transifex.com', $additionalPlugins);
        }
        $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new ArrayDenormalizer(), new JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new Serializer(
            $normalizers,
            [new JsonEncoder(new JsonEncode(), new JsonDecode(['json_decode_associative' => true]))]
        );

        return new Client($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
