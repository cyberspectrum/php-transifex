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

namespace CyberSpectrum\PhpTransifex\Api;

use CyberSpectrum\PhpTransifex\Client;
use CyberSpectrum\PhpTransifex\HttpClient\Message\ResponseMediator;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\UriFactory;
use Psr\Http\Message\UriInterface;

/**
 * Abstract class for Api classes.
 *
 * @author Joseph Bielawski <stloyd@gmail.com>
 */
abstract class AbstractApi implements ApiInterface
{
    /**
     * The URI factory to use.
     *
     * @var UriFactory
     */
    protected $uriFactory;

    /**
     * The client.
     *
     * @var Client
     */
    protected $client;

    /**
     * Create a new instance.
     *
     * @param Client     $client     The client to use.
     *
     * @param UriFactory $uriFactory The URI factory to use.
     */
    public function __construct(Client $client, UriFactory $uriFactory = null)
    {
        $this->client     = $client;
        $this->uriFactory = $uriFactory ?: UriFactoryDiscovery::find();
    }

    /**
     * Send a GET request with query parameters.
     *
     * @param string|UriInterface $path           Request path.
     * @param array               $parameters     GET parameters.
     * @param array               $requestHeaders Request Headers.
     *
     * @return array|string
     */
    protected function get($path, array $parameters = [], array $requestHeaders = [])
    {
        $uri      = $this->buildUri($path, $parameters);
        $response = $this->getHttpClient()->get($uri, $requestHeaders);

        return ResponseMediator::getContent($response);
    }

    /**
     * Send a HEAD request with query parameters.
     *
     * @param string|UriInterface $path           Request path.
     * @param array               $parameters     HEAD parameters.
     * @param array               $requestHeaders Request headers.
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function head($path, array $parameters = [], array $requestHeaders = [])
    {
        $uri      = $this->buildUri($path, $parameters);
        $response = $this->getHttpClient()->head($uri, $requestHeaders);

        return $response;
    }

    /**
     * Send a POST request with JSON-encoded parameters.
     *
     * @param string|UriInterface $path           Request path.
     * @param array               $parameters     POST parameters to be JSON encoded.
     * @param array               $requestHeaders Request headers.
     *
     * @return array|string
     */
    protected function post($path, array $parameters = [], array $requestHeaders = [])
    {
        $requestHeaders = $this->jsonHeader($requestHeaders);
        return $this->postRaw($path, $this->createJsonBody($parameters), $requestHeaders);
    }

    /**
     * Send a POST request with raw data.
     *
     * @param string $path           Request path.
     * @param string $body           Request body.
     * @param array  $requestHeaders Request headers.
     *
     * @return array|string
     */
    protected function postRaw($path, $body, array $requestHeaders = [])
    {
        $response = $this->getHttpClient()->post($path, $requestHeaders, $body);

        return ResponseMediator::getContent($response);
    }

    /**
     * Send a PATCH request with JSON-encoded parameters.
     *
     * @param string $path           Request path.
     * @param array  $parameters     POST parameters to be JSON encoded.
     * @param array  $requestHeaders Request headers.
     *
     * @return array|string
     */
    protected function patch($path, array $parameters = [], array $requestHeaders = [])
    {
        $requestHeaders = $this->jsonHeader($requestHeaders);

        $response = $this->getHttpClient()->patch($path, $requestHeaders, $this->createJsonBody($parameters));

        return ResponseMediator::getContent($response);
    }

    /**
     * Send a PUT request with JSON-encoded parameters.
     *
     * @param string|UriInterface $path           Request path.
     * @param array               $parameters     POST parameters to be JSON encoded.
     * @param array               $requestHeaders Request headers.
     *
     * @return array|string
     */
    protected function put($path, array $parameters = [], array $requestHeaders = [])
    {
        $requestHeaders = $this->jsonHeader($requestHeaders);

        $response = $this->getHttpClient()->put($path, $requestHeaders, $this->createJsonBody($parameters));

        return ResponseMediator::getContent($response);
    }

    /**
     * Send a DELETE request with JSON-encoded parameters.
     *
     * @param string|UriInterface $path           Request path.
     * @param array               $parameters     POST parameters to be JSON encoded.
     * @param array               $requestHeaders Request headers.
     *
     * @return array|string
     */
    protected function delete($path, array $parameters = [], array $requestHeaders = [])
    {
        $requestHeaders = $this->jsonHeader($requestHeaders);

        $response = $this->getHttpClient()->delete($path, $requestHeaders, $this->createJsonBody($parameters));

        return ResponseMediator::getContent($response);
    }

    /**
     * Add options from the passed array to the result.
     *
     * @param array $options      The source of the option values.
     * @param array $validOptions The allowed option names.
     * @param array $data         The data to add the options to.
     *
     * @return array
     */
    protected function addOptions($options, $validOptions, $data = [])
    {
        // Loop through the valid options and if we have them, add them to the request data
        foreach ($validOptions as $option) {
            if (isset($options[$option])) {
                $data[$option] = $options[$option];
            }
        }

        return $data;
    }

    /**
     * Create a JSON encoded version of an array of parameters.
     *
     * @param array $parameters Request parameters.
     *
     * @return null|string
     */
    private function createJsonBody(array $parameters)
    {
        return (count($parameters) === 0)
            ? null
            : json_encode($parameters, empty($parameters) ? JSON_FORCE_OBJECT : 0);
    }

    /**
     * Add the content type json to the headers.
     *
     * @param array $requestHeaders The current headers.
     *
     * @return array
     *
     * @throws \RuntimeException When the content type has already been set.
     */
    private function jsonHeader($requestHeaders)
    {
        if (isset($requestHeaders['Content-Type']) && 'application/json' !== $requestHeaders['Content-Type']) {
            throw new \RuntimeException('Content type header already set to non json.');
        }
        $requestHeaders['Content-Type'] = 'application/json';

        return $requestHeaders;
    }

    /**
     * Build an URI.
     *
     * @param string $path       The path.
     * @param array  $parameters The query parameters.
     *
     * @return UriInterface
     */
    private function buildUri($path, array $parameters)
    {
        $uri = $this->uriFactory->createUri($path);
        if (count($parameters) > 0) {
            $pieces = [];
            foreach ($parameters as $name => $parameter) {
                if ($parameter !== null) {
                    $pieces[] = $name . '=' . $parameter;
                } else {
                    $pieces[] = $name;
                }
            }

            return $this->uriFactory->createUri($uri)->withQuery(implode('&', $pieces));
        }

        return $uri;
    }

    /**
     * Retrieve the HTTP client.
     *
     * @return \Http\Client\Common\HttpMethodsClient
     */
    private function getHttpClient()
    {
        return $this->client->getHttpClient();
    }
}
