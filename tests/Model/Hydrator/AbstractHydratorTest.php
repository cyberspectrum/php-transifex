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

use CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator;
use Http\Client\Common\Exception\ClientErrorException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * This tests the AbstractHydrator.
 */
class AbstractHydratorTest extends HydratorTestCase
{
    /**
     * Mock an hydrator.
     *
     * @param array $data The initial data.
     *
     * @return AbstractHydrator|\PHPUnit_Framework_MockObject_MockObject
     */
    protected function mockHydrator($data = [])
    {
        $mockApi = $this->mockClient();

        return $this->getMockForAbstractClass(AbstractHydrator::class, [$mockApi, $data]);
    }

    /**
     * Test get returns from pending.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::__construct()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::get()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::has()
     */
    public function testGetPending()
    {
        $mock = $this->mockHydrator(['foo' => 'bar']);
        $mock->expects($this->never())->method('doLoad');

        $this->assertTrue($mock->has('foo'));
        $this->assertSame('bar', $mock->get('foo'));
    }

    /**
     * Test set pending.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::set()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::get()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::has()
     */
    public function testSetPending()
    {
        $mock = $this->mockHydrator();
        $mock->expects($this->never())->method('doLoad');

        $mock->set('foo', 'bar');

        $this->assertTrue($mock->has('foo'));
        $this->assertSame('bar', $mock->get('foo'));
    }

    /**
     * Test that exists calls load only once.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::exists()
     */
    public function testExists()
    {
        $mock = $this->mockHydrator();
        $mock->expects($this->once())->method('doLoad')->willReturn(['foo' => 'bar']);

        $this->assertTrue($mock->exists());
        $this->assertTrue($mock->exists());
    }

    /**
     * Test that load sets exist false for 404.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::load()
     */
    public function testLoadWith404()
    {
        $request  = $this->getMockForAbstractClass(RequestInterface::class);
        $response = $this->getMockForAbstractClass(ResponseInterface::class);
        $response->expects($this->once())->method('getStatusCode')->willReturn(404);

        $exception = new ClientErrorException('Not found', $request, $response);

        $mock = $this->mockHydrator();
        $mock->expects($this->once())->method('doLoad')->willThrowException($exception);

        $this->assertFalse($mock->exists());
    }

    /**
     * Test that load re-throws exception.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::load()
     */
    public function testLoadRethrows()
    {
        $request  = $this->getMockForAbstractClass(RequestInterface::class);
        $response = $this->getMockForAbstractClass(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn(500);

        $exception = new ClientErrorException('Moep!', $request, $response);

        $mock = $this->mockHydrator();
        $mock->expects($this->once())->method('doLoad')->willThrowException($exception);

        try {
            $mock->load();
        } catch (ClientErrorException $thrownException) {
            $this->assertSame($exception, $thrownException->getPrevious());
            $this->assertSame($exception->getMessage(), $thrownException->getPrevious()->getMessage());
            $this->assertSame($exception->getRequest(), $thrownException->getPrevious()->getRequest());
            $this->assertSame($exception->getResponse(), $thrownException->getPrevious()->getResponse());
            return;
        } catch (\Exception $exception) {
            $this->fail('Exception not wrapped.');
            return;
        }

        $this->fail('Exception not thrown.');
    }

    /**
     * Test get keys.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::keys()
     */
    public function testGetKeys()
    {
        $mock = $this->mockHydrator(['pending' => 'value']);
        $mock->expects($this->once())->method('doLoad')->willReturn(['foo' => 'bar']);

        $this->assertSame(['foo', 'pending'], $mock->keys());
    }

    /**
     * Test get keys.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::get()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::has()
     */
    public function testGetFromTransifexData()
    {
        $mock = $this->mockHydrator();
        $mock->expects($this->once())->method('doLoad')->willReturn(['foo' => 'bar']);

        $this->assertTrue($mock->has('foo'));
        $this->assertSame('bar', $mock->get('foo'));
    }

    /**
     * Test get unknown key.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::get()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::has()
     */
    public function testGetUnknownKey()
    {
        $request  = $this->getMockForAbstractClass(RequestInterface::class);
        $response = $this->getMockForAbstractClass(ResponseInterface::class);
        $response->method('getStatusCode')->willReturn(404);
        $exception = new ClientErrorException('Not found', $request, $response);

        $mock = $this->mockHydrator();
        $mock->expects($this->once())->method('doLoad')->willThrowException($exception);

        $this->setExpectedException('RuntimeException', 'Key foo is not set.');

        $this->assertFalse($mock->has('foo'));
        $mock->get('foo');
    }

    /**
     * Test the delete method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::delete()
     */
    public function testDelete()
    {
        $mock = $this->mockHydrator();
        $mock->expects($this->once())->method('doDelete');

        $mock->delete();

        $this->assertFalse($mock->exists());
    }

    /**
     * Test the create method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::create()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::load()
     */
    public function testCreate()
    {
        $mock = $this->mockHydrator();
        $mock->expects($this->once())->method('doCreate');
        $mock->expects($this->once())->method('doLoad')->willReturn(['foo' => 'bar']);

        $mock->create();

        $this->assertTrue($mock->exists());
    }

    /**
     * Test the save method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::save()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AbstractHydrator::load()
     */
    public function testSave()
    {
        $mock = $this->mockHydrator();
        $mock->expects($this->once())->method('doSave');
        $mock->expects($this->once())->method('doLoad')->willReturn(['foo' => 'bar']);

        $mock->save();

        $this->assertTrue($mock->exists());
    }
}
