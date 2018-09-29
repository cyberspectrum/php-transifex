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

use CyberSpectrum\PhpTransifex\Model\Hydrator\ValueStore;
use PHPUnit\Framework\TestCase;

/**
 * This tests the ValueStore.
 */
class ValueStoreTest extends TestCase
{
    /**
     * Test that it can be created with initial data.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ValueStore::__construct()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ValueStore::has()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ValueStore::get()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ValueStore::keys()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ValueStore::values()
     */
    public function testWithInitialData()
    {
        $store = new ValueStore(['foo' => 'bar']);
        $this->assertTrue($store->has('foo'));
        $this->assertSame('bar', $store->get('foo'));
        $this->assertSame(['foo'], $store->keys());
        $this->assertSame(['foo' => 'bar'], $store->values());
    }

    /**
     * Test that an exception is thrown for unknown keys.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ValueStore::get()
     */
    public function testExceptionForGetUnknownKey()
    {
        if (method_exists($this, 'expectException')) {
            $this->expectException(\RuntimeException::class);
            $this->expectExceptionMessage('Key foo is not set.');
        } else {
            $this->setExpectedException(\RuntimeException::class, 'Key foo is not set.');
        }

        $store = new ValueStore();
        $store->get('foo');
    }

    /**
     * Test the has() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ValueStore::has()
     */
    public function testHasFalseForUnknown()
    {
        $store = new ValueStore();
        $this->assertFalse($store->has('foo'));
    }

    /**
     * Test the set() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ValueStore::set()
     */
    public function testSet()
    {
        $store = new ValueStore();
        $store->set('foo', 'bar');
        $this->assertTrue($store->has('foo'));
        $this->assertSame('bar', $store->get('foo'));
    }

    /**
     * Test that values can be overridden.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ValueStore::setValues()
     */
    public function testSetValues()
    {
        $store = new ValueStore();
        $store->setValues(['foo' => 'bar']);
        $this->assertSame(['foo' => 'bar'], $store->values());
    }

    /**
     * Test the remove() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ValueStore::remove()
     */
    public function testRemove()
    {
        $store = new ValueStore(['foo' => 'bar']);
        $store->remove('foo');
        $this->assertFalse($store->has('foo'));
        $this->assertEmpty($store->values());
    }

    /**
     * Test the remove() method for unknown keys.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ValueStore::remove()
     */
    public function testRemoveThrowsForUnknown()
    {
        $store = new ValueStore(['foo' => 'bar']);

        if (method_exists($this, 'expectException')) {
            $this->expectException(\RuntimeException::class);
            $this->expectExceptionMessage('Key foobar is not set.');
        } else {
            $this->setExpectedException(\RuntimeException::class, 'Key foobar is not set.');
        }

        $store->remove('foobar');
    }
}
