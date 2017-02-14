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

namespace CyberSpectrum\PhpTransifex\Tests\Model\Hydrator;

use CyberSpectrum\PhpTransifex\Client;

/**
 * This is the abstract base for Entity tests.
 */
abstract class HydratorTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * Mock an "offline" API client.
     *
     * All methods except for the passed ones will be asserted to never be called.
     *
     * @param string[] $allowedMethods The allowed method names.
     *
     * @return Client|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function mockClient($allowedMethods = [])
    {
        $methods = [
            'api',
            'authenticate',
            'addCache',
            'removeCache',
            'getLastResponse',
            'getHttpClient',
            'getHttpClientBuilder',
            // Virtual methods.
            'format',
            'language',
            'languageinfo',
            'project',
            'projects',
            'resource',
            'resources',
            'statistic',
            'statistics',
            'translation',
            'translations',
            'translationstring',
            'translationstrings',
        ];

        $client = $this
            ->getMockBuilder(Client::class)
            ->setMethods($methods)
            ->disableOriginalConstructor()
            ->getMock();

        foreach (array_diff($methods, array_keys($allowedMethods)) as $endpoint) {
            $client->expects($this->never())->method($endpoint);
        }
        foreach ($allowedMethods as $endpoint => $instance) {
            $client->method($endpoint)->willReturn($instance);
        }

        return $client;
    }
}
