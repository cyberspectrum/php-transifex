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

namespace CyberSpectrum\PhpTransifex\Tests\Api;

use CyberSpectrum\PhpTransifex\Client;
use Psr\Http\Message\UriInterface;

/**
 * This is the abstract base for API tests.
 */
abstract class ApiTestCase extends \PHPUnit_Framework_TestCase
{
    public static $APICLASS;

    /**
     * Assert that a GET request is issued with the passed parameters.
     *
     * @param string|UriInterface $url            Request path.
     * @param array               $parameters     GET parameters.
     * @param array               $requestHeaders Request Headers.
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function expectGet($url, array $parameters = [], array $requestHeaders = [])
    {
        return $this->expectMethod('get', [$url, $parameters, $requestHeaders]);
    }

    /**
     * Assert that a HEAD request is issued with the passed parameters.
     *
     * @param string|UriInterface $url            Request path.
     * @param array               $parameters     GET parameters.
     * @param array               $requestHeaders Request Headers.
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function expectHead($url, array $parameters = [], array $requestHeaders = [])
    {
        return $this->expectMethod('head', [$url, $parameters, $requestHeaders]);
    }

    /**
     * Assert that a POST request is issued with the passed parameters.
     *
     * @param string|UriInterface $url            Request path.
     * @param array               $parameters     GET parameters.
     * @param array               $requestHeaders Request Headers.
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function expectPost($url, array $parameters = [], array $requestHeaders = [])
    {
        return $this->expectMethod('post', [$url, $parameters, $requestHeaders]);
    }

    /**
     * Assert that a PATCH request is issued with the passed parameters.
     *
     * @param string|UriInterface $url            Request path.
     * @param array               $parameters     GET parameters.
     * @param array               $requestHeaders Request Headers.
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function expectPatch($url, array $parameters = [], array $requestHeaders = [])
    {
        return $this->expectMethod('patch', [$url, $parameters, $requestHeaders]);
    }

    /**
     * Assert that a PUT request is issued with the passed parameters.
     *
     * @param string|UriInterface $url            Request path.
     * @param array               $parameters     GET parameters.
     * @param array               $requestHeaders Request Headers.
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function expectPut($url, array $parameters = [], array $requestHeaders = [])
    {
        return $this->expectMethod('put', [$url, $parameters, $requestHeaders]);
    }

    /**
     * Assert that a DELETE request is issued with the passed parameters.
     *
     * @param string|UriInterface $url            Request path.
     * @param array               $parameters     GET parameters.
     * @param array               $requestHeaders Request Headers.
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    public function expectDelete($url, array $parameters = [], array $requestHeaders = [])
    {
        return $this->expectMethod('delete', [$url, $parameters, $requestHeaders]);
    }

    /**
     * Mock an API instance expecting a certain method to be called with the passed parameters.
     *
     * @param $func
     * @param $args
     *
     * @return \PHPUnit_Framework_MockObject_MockObject
     */
    private function expectMethod($func, $args)
    {
        $client = $this
            ->getMockBuilder(Client::class)
            ->setMethods(['getHttpClient'])
            ->getMock();
        $client->expects($this->never())->method('getHttpClient');

        $mock = $this
            ->getMockBuilder(static::$APICLASS)
            ->setConstructorArgs([$client])
            ->setMethods([$func])
            ->getMock();

        $method = $mock->expects($this->once())->method($func);
        call_user_func_array([$method, 'with'], $args);

        return $mock;
    }
}
