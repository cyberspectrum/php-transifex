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

namespace CyberSpectrum\PhpTransifex\HttpClient;

use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\MessageFactoryDiscovery;
use Http\Discovery\StreamFactoryDiscovery;
use Http\Message\MessageFactory;
use Http\Message\RequestFactory;
use Http\Message\StreamFactory;
use Psr\Cache\CacheItemPoolInterface;

/**
 * A builder that builds the API client.
 * This will allow you to fluently add and remove plugins.
 *
 * Based upon the implementation by knplabs/github-api.
 */
class Builder
{
    /**
     * The object that sends HTTP messages.
     *
     * @var HttpClient
     */
    private $httpClient;

    /**
     * A HTTP client with all our plugins.
     *
     * @var PluginClient
     */
    private $pluginClient;

    /**
     * Message factory.
     *
     * @var MessageFactory
     */
    private $requestFactory;

    /**
     * Stream factory.
     *
     * @var StreamFactory
     */
    private $streamFactory;

    /**
     * True if we should create a new Plugin client at next request.
     *
     * @var bool
     */
    private $httpClientModified = true;

    /**
     * List of registered plugins.
     *
     * @var Plugin[]
     */
    private $plugins = [];

    /**
     * This plugin is speacal treated because it has to be the very last plugin.
     *
     * @var Plugin\CachePlugin
     */
    private $cachePlugin;

    /**
     * Http headers.
     *
     * @var array
     */
    private $headers = [];

    /**
     * Create a new instance.
     *
     * @param HttpClient     $httpClient     HTTP client to use, if not given a default is created.
     * @param RequestFactory $requestFactory Request factory to use, if not given a default is created.
     * @param StreamFactory  $streamFactory  Stream factory to use, if not given a default is created.
     */
    public function __construct(
        HttpClient $httpClient = null,
        RequestFactory $requestFactory = null,
        StreamFactory $streamFactory = null
    ) {
        $this->httpClient     = $httpClient ?: HttpClientDiscovery::find();
        $this->requestFactory = $requestFactory ?: MessageFactoryDiscovery::find();
        $this->streamFactory  = $streamFactory ?: StreamFactoryDiscovery::find();
    }

    /**
     * Retrieve the client.
     *
     * @return HttpMethodsClient
     */
    public function getHttpClient()
    {
        if ($this->httpClientModified) {
            $this->httpClientModified = false;

            $plugins = $this->plugins;
            if ($this->cachePlugin) {
                $plugins[] = $this->cachePlugin;
            }

            $this->pluginClient = new HttpMethodsClient(
                new PluginClient($this->httpClient, $plugins),
                $this->requestFactory
            );
        }

        return $this->pluginClient;
    }

    /**
     * Add a new plugin to the end of the plugin chain.
     *
     * @param Plugin $plugin The plugin to add.
     *
     * @return void
     */
    public function addPlugin(Plugin $plugin)
    {
        $this->plugins[]          = $plugin;
        $this->httpClientModified = true;
    }

    /**
     * Remove a plugin by its fully qualified class name (FQCN).
     *
     * @param string $fqcn The full qualified class name.
     *
     * @return void
     */
    public function removePlugin($fqcn)
    {
        foreach ($this->plugins as $idx => $plugin) {
            if ($plugin instanceof $fqcn) {
                unset($this->plugins[$idx]);
                $this->httpClientModified = true;
            }
        }
    }

    /**
     * Clears used headers.
     *
     * @return void
     */
    public function clearHeaders()
    {
        $this->headers = [];

        $this->removePlugin(Plugin\HeaderAppendPlugin::class);
        $this->addPlugin(new Plugin\HeaderAppendPlugin($this->headers));
    }

    /**
     * Add header strings.
     *
     * @param array $headers The headers to add.
     *
     * @return void
     */
    public function addHeaders(array $headers)
    {
        $this->headers = array_merge($this->headers, $headers);

        $this->removePlugin(Plugin\HeaderAppendPlugin::class);
        $this->addPlugin(new Plugin\HeaderAppendPlugin($this->headers));
    }

    /**
     * Add a cache plugin to cache responses locally.
     *
     * @param CacheItemPoolInterface $cachePool The cache pool implementation.
     * @param array                  $config    The configuration.
     *
     * @return void
     */
    public function addCache(CacheItemPoolInterface $cachePool, array $config = [])
    {
        $this->cachePlugin        = new Plugin\CachePlugin($cachePool, $this->streamFactory, $config);
        $this->httpClientModified = true;
    }

    /**
     * Remove the cache plugin.
     *
     * @return void
     */
    public function removeCache()
    {
        $this->cachePlugin        = null;
        $this->httpClientModified = true;
    }
}
