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

namespace CyberSpectrum\PhpTransifex;

use BadMethodCallException;
use CyberSpectrum\PhpTransifex\Api\ApiInterface;
use CyberSpectrum\PhpTransifex\HttpClient\Builder;
use CyberSpectrum\PhpTransifex\HttpClient\Plugin\Authentication;
use CyberSpectrum\PhpTransifex\HttpClient\Plugin\History;
use CyberSpectrum\PhpTransifex\HttpClient\Plugin\TransifexExceptionThrower;
use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin;
use Http\Client\HttpClient;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\UriFactory;
use InvalidArgumentException;
use Psr\Cache\CacheItemPoolInterface;

/**
 * Simple yet very cool PHP Transifex client.
 *
 * @method Api\Format format()
 * @method Api\Language language()
 * @method Api\Languageinfo languageinfo()
 * @method Api\Project project()
 * @method Api\Project projects()
 * @method Api\Resource resource()
 * @method Api\Resource resources()
 * @method Api\Statistic statistic()
 * @method Api\Statistic statistics()
 * @method Api\Translation translation()
 * @method Api\Translation translations()
 * @method Api\TranslationString translationstring()
 * @method Api\TranslationString translationstrings()
 */
class Client
{
    const API_URI = 'https://www.transifex.com';

    /**
     * The client builder to use.
     *
     * @var Builder
     */
    private $httpClientBuilder;

    /**
     * The history in use.
     *
     * @var History
     */
    private $responseHistory;

    /**
     * Instantiate a new GitHub client.
     *
     * @param Builder|null $httpClientBuilder The client builder.
     *
     * @param UriFactory   $uriFactory        The URI factory to use.
     */
    public function __construct(Builder $httpClientBuilder = null, UriFactory $uriFactory = null)
    {
        $this->responseHistory   = new History();
        $this->httpClientBuilder = $builder = $httpClientBuilder ?: new Builder();
        $uri                     = ($uriFactory ?: UriFactoryDiscovery::find())->createUri(static::API_URI);

        $builder->addPlugin(new TransifexExceptionThrower());
        $builder->addPlugin(new Plugin\HistoryPlugin($this->responseHistory));
        $builder->addPlugin(new Plugin\RedirectPlugin());
        $builder->addPlugin(new Plugin\AddHostPlugin($uri));
        $builder->addPlugin(new Plugin\HeaderDefaultsPlugin(array(
            'User-Agent' => 'php-transifex-api (http://github.com/cyberspectrum/php-transifex)',
        )));
    }

    /**
     * Create a Transifex\Client using a HttpClient.
     *
     * @param HttpClient $httpClient The client to use.
     *
     * @param UriFactory $uriFactory The URI factory to use.
     *
     * @return Client
     */
    public static function createWithHttpClient(HttpClient $httpClient, UriFactory $uriFactory = null)
    {
        $builder = new Builder($httpClient);

        return new self($builder, $uriFactory);
    }

    /**
     * Retrieve an API instance.
     *
     * @param string $name The name of the API.
     *
     * @throws InvalidArgumentException When an unknown API is requested.
     *
     * @return ApiInterface
     *
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     */
    public function api($name)
    {
        switch ($name) {
            case 'format':
                return new Api\Format($this);
            case 'language':
                return new Api\Language($this);
            case 'languageinfo':
                return new Api\Languageinfo($this);
            case 'project':
            case 'projects':
                return new Api\Project($this);
            case 'resource':
            case 'resources':
                return new Api\Resource($this);
            case 'statistic':
            case 'statistics':
                return new Api\Statistic($this);
            case 'translation':
            case 'translations':
                return new Api\Translation($this);
            case 'translationstring':
            case 'translationstrings':
                return new Api\TranslationString($this);
            default:
        }

        throw new InvalidArgumentException(sprintf('Undefined api instance called: "%s"', $name));
    }

    /**
     * Authenticate a user for all next requests.
     *
     * @param string      $loginOrToken Transifex username or token.
     * @param null|string $password     Transifex password or null if token is passed as username.
     *
     * @return void
     *
     * @throws InvalidArgumentException If either login or password is missing.
     */
    public function authenticate($loginOrToken, $password = null)
    {
        // Token based auth.
        if (null === $password) {
            $password     = $loginOrToken;
            $loginOrToken = 'api';
        }

        if (empty($loginOrToken) || empty($password)) {
            throw new InvalidArgumentException('You need to specify username and password!');
        }

        $this->getHttpClientBuilder()->removePlugin(Authentication::class);
        $this->getHttpClientBuilder()->addPlugin(new Authentication($loginOrToken, $password));
    }

    /**
     * Add a cache plugin to cache responses locally.
     *
     * @param CacheItemPoolInterface $cachePool The cache to use.
     * @param array                  $config    The config to use.
     *
     * @return void
     */
    public function addCache(CacheItemPoolInterface $cachePool, array $config = [])
    {
        $this->getHttpClientBuilder()->addCache($cachePool, $config);
    }

    /**
     * Remove the cache plugin.
     *
     * @return void
     */
    public function removeCache()
    {
        $this->getHttpClientBuilder()->removeCache();
    }

    /**
     * Create the API inline.
     *
     * @param string $name The name of the API.
     *
     * @param mixed  $args One or more parameters to pass to the constructor of the API.
     *
     * @throws BadMethodCallException For unknown APIs.
     *
     * @return ApiInterface
     */
    public function __call($name, $args)
    {
        try {
            return $this->api($name);
        } catch (InvalidArgumentException $e) {
            throw new BadMethodCallException(sprintf('Undefined method called: "%s"', $name));
        }
    }

    /**
     * Retrieve the last response.
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getLastResponse()
    {
        return $this->responseHistory->getLastResponse();
    }

    /**
     * Retrieve the HTTP client.
     *
     * @return HttpMethodsClient
     */
    public function getHttpClient()
    {
        return $this->getHttpClientBuilder()->getHttpClient();
    }

    /**
     * Retrieve the HTTP builder.
     *
     * @return Builder
     */
    protected function getHttpClientBuilder()
    {
        return $this->httpClientBuilder;
    }
}
