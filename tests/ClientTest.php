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

namespace CyberSpectrum\PhpTransifex\Tests;

use BadMethodCallException;
use CyberSpectrum\PhpTransifex\Api;
use CyberSpectrum\PhpTransifex\Client;
use CyberSpectrum\PhpTransifex\HttpClient\Builder;
use CyberSpectrum\PhpTransifex\HttpClient\Plugin\Authentication;
use Http\Client\HttpClient;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Psr\Cache\CacheItemPoolInterface;

/**
 * This tests the transifex client class.
 */
class ClientTest extends TestCase
{
    /**
     * Test that the HTTP client is optional.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Client::__construct()
     * @covers \CyberSpectrum\PhpTransifex\Client::getHttpClient()
     * @covers \CyberSpectrum\PhpTransifex\Client::getHttpClientBuilder()
     */
    public function testShouldNotHaveToPassHttpClientToConstructor()
    {
        $client = new Client();

        $this->assertInstanceOf(HttpClient::class, $client->getHttpClient());
    }

    /**
     * Test that an HTTP client interface get's passed to the constructor.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Client::__construct()
     * @covers \CyberSpectrum\PhpTransifex\Client::createWithHttpClient()
     * @covers \CyberSpectrum\PhpTransifex\Client::getHttpClient()
     * @covers \CyberSpectrum\PhpTransifex\Client::getHttpClientBuilder()
     */
    public function testShouldPassHttpClientInterfaceToConstructor()
    {
        $httpClientMock = $this->getMockBuilder(HttpClient::class)
            ->getMock();

        $client = Client::createWithHttpClient($httpClientMock);

        $this->assertInstanceOf(HttpClient::class, $client->getHttpClient());
    }

    /**
     * Test that the authentication works.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Client::authenticate()
     */
    public function testShouldAuthenticateUsingGivenParameters()
    {
        $builder = $this->getMockBuilder(Builder::class)
            ->setMethods(['addPlugin', 'removePlugin'])
            ->disableOriginalConstructor()
            ->getMock();
        $builder->expects($this->once())
            ->method('addPlugin')
            ->with($this->equalTo(new Authentication('login', 'password')));
        $builder->expects($this->once())
            ->method('removePlugin')
            ->with(Authentication::class);

        $client = $this->getMockBuilder(Client::class)
            ->disableOriginalConstructor()
            ->setMethods(['getHttpClientBuilder'])
            ->getMock();
        $client->expects($this->exactly(2))
            ->method('getHttpClientBuilder')
            ->willReturn($builder);

        $client->authenticate('login', 'password');
    }

    /**
     * Test that the authentication works.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Client::authenticate()
     */
    public function testShouldAuthenticateUsingApiToken()
    {
        $builder = $this->getMockBuilder(Builder::class)
            ->setMethods(['addPlugin', 'removePlugin'])
            ->disableOriginalConstructor()
            ->getMock();
        $builder->expects($this->once())
            ->method('addPlugin')
            ->with($this->equalTo(new Authentication('api', 'token')));
        $builder->expects($this->once())
            ->method('removePlugin')
            ->with(Authentication::class);

        $client = $this->getMockBuilder(Client::class)
            ->disableOriginalConstructor()
            ->setMethods(['getHttpClientBuilder'])
            ->getMock();
        $client->expects($this->exactly(2))
            ->method('getHttpClientBuilder')
            ->willReturn($builder);

        $client->authenticate('token');
    }

    /**
     * Test that an exception is thrown if an auth parameter is missing.
     *
     * @param mixed $login    The login value.
     * @param mixed $password The password value.
     *
     * @return void
     *
     * @expectedException InvalidArgumentException
     *
     * @dataProvider getBrokenAuthProvider
     *
     * @covers \CyberSpectrum\PhpTransifex\Client::authenticate()
     */
    public function testShouldThrowExceptionWhenAuthenticatingWithoutLoginOrPassword($login, $password)
    {
        $client = new Client();

        $client->authenticate($login, $password);
    }

    /**
     * Generate broken auth information.
     *
     * @return array
     */
    public function getBrokenAuthProvider()
    {
        return [
            [null, 'password'],
            [null, null]
        ];
    }

    /**
     * Test that the API with the given name can be instantiated.
     *
     * @param string $apiName The name of the API.
     * @param string $class   The class name of the API to be returned.
     *
     * @return void
     *
     * @dataProvider getApiClassesProvider
     *
     * @covers \CyberSpectrum\PhpTransifex\Client::api()
     */
    public function testShouldGetApiInstance($apiName, $class)
    {
        $client = new Client();

        $this->assertInstanceOf($class, $client->api($apiName));
    }

    /**
     * Test that the API with the given name can be instantiated via magic method.
     *
     * @param string $apiName The name of the API.
     * @param string $class   The class name of the API to be returned.
     *
     * @return void
     *
     * @dataProvider getApiClassesProvider
     *
     * @covers \CyberSpectrum\PhpTransifex\Client::__call()
     */
    public function testShouldGetMagicApiInstance($apiName, $class)
    {
        $client = new Client();

        $this->assertInstanceOf($class, $client->$apiName());
    }

    /**
     * Test that retrieving an unknown API raises an exception.
     *
     * @return void
     *
     * @expectedException InvalidArgumentException
     *
     * @covers \CyberSpectrum\PhpTransifex\Client::api()
     */
    public function testShouldNotGetApiInstance()
    {
        $client = new Client();
        $client->api('do_not_exist');
    }

    /**
     * Test that retrieving an unknown API via magic method raises an exception.
     *
     * @return void
     *
     * @expectedException BadMethodCallException
     *
     * @covers \CyberSpectrum\PhpTransifex\Client::__call()
     */
    public function testShouldNotGetMagicApiInstance()
    {
        $client = new Client();
        $client->doNotExist();
    }

    /**
     * Data provider method for API retrieval tests.
     *
     * @return array
     */
    public function getApiClassesProvider()
    {
        return [
            'format' => ['format', Api\Format::class],
            'language' => ['language', Api\Language::class],
            'languageinfo' => ['languageinfo', Api\Languageinfo::class],
            'project' => ['project', Api\Project::class],
            'projects' => ['projects', Api\Project::class],
            'resource' => ['resource', Api\Resource::class],
            'resources' => ['resources', Api\Resource::class],
            'statistic' => ['statistic', Api\Statistic::class],
            'statistics' => ['statistics', Api\Statistic::class],
            'translation' => ['translation', Api\Translation::class],
            'translations' => ['translations', Api\Translation::class],
            'translationstring' => ['translationstring', Api\TranslationString::class],
            'translationstrings' => ['translationstrings', Api\TranslationString::class],
        ];
    }

    /**
     * Test that cache adding works.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Client::addCache()
     */
    public function testCacheAdding()
    {
        $pool = $this->getMockBuilder(CacheItemPoolInterface::class)->getMockForAbstractClass();

        $builder = $this->getMockBuilder(Builder::class)->setMethods(['addCache'])->getMock();
        $builder->expects($this->once())->method('addCache')->with($pool, ['config' => 'value']);

        $client = new Client($builder);
        $client->addCache($pool, ['config' => 'value']);
    }

    /**
     * Test that cache removing works.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Client::removeCache()
     */
    public function testCacheRemove()
    {
        $builder = $this->getMockBuilder(Builder::class)->setMethods(['removeCache'])->getMock();
        $builder->expects($this->once())->method('removeCache');

        $client = new Client($builder);
        $client->removeCache();
    }
}
