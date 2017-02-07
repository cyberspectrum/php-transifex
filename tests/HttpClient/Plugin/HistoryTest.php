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

namespace CyberSpectrum\PhpTransifex\Tests\HttpClient\Plugin;

use Http\Client\Exception;
use CyberSpectrum\PhpTransifex\HttpClient\Plugin\History;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * This tests the history.
 */
class HistoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test that successful responses are added.
     *
     * @return void
     */
    public function testStoresSuccess()
    {
        $request  = $this->getMockForAbstractClass(RequestInterface::class);
        $response = $this->getMockForAbstractClass(ResponseInterface::class);
        $instance = new History();

        $instance->addSuccess($request, $response);

        $this->assertSame($response, $instance->getLastResponse());
    }

    /**
     * Test that failures will not get added.
     *
     * @return void
     */
    public function testDoesIgnoreFailure()
    {
        $request  = $this->getMockForAbstractClass(RequestInterface::class);
        $response = $this->getMockForAbstractClass(Exception::class);
        $instance = new History();

        $instance->addFailure($request, $response);

        $this->assertSame(null, $instance->getLastResponse());
    }
}
