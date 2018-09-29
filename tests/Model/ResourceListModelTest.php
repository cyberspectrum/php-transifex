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

namespace CyberSpectrum\PhpTransifex\Tests\Model;

use CyberSpectrum\PhpTransifex\Model\Hydrator\HydratorInterface;
use CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceListHydrator;
use CyberSpectrum\PhpTransifex\Model\ResourceListModel;
use CyberSpectrum\PhpTransifex\Model\ResourceModel;
use PHPUnit\Framework\TestCase;

/**
 * This tests the ResourceListModel.
 */
class ResourceListModelTest extends TestCase
{
    /**
     * Test that the constructor sets the hydrator.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceListModel::__construct()
     */
    public function testConstructor()
    {
        $hydrator = $this
            ->getMockBuilder(ResourceListHydrator::class)
            ->disableOriginalConstructor()
            ->getMock();

        /** @var ResourceListHydrator $hydrator */
        $model = new ResourceListModel($hydrator);

        $this->assertSame($hydrator, $model->hydrator());
    }

    /**
     * Test the get() method for unknown resource slug.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceListModel::get()
     */
    public function testGetForUnknown()
    {
        $hydrator = $this
            ->getMockBuilder(ResourceListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('slug')->willReturn(false);

        /** @var ResourceListHydrator $hydrator */
        $model = new ResourceListModel($hydrator);

        if (method_exists($this, 'expectException')) {
            $this->expectException(\OutOfBoundsException::class);
            $this->expectExceptionMessage('Resource not in list: slug');
        } else {
            $this->setExpectedException(\OutOfBoundsException::class, 'Resource not in list: slug');
        }

        $model->get('slug');
    }

    /**
     * Test the get() method for known resource slug.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceListModel::get()
     */
    public function testGetForKnown()
    {
        $subHydrator = $this->getMockBuilder(HydratorInterface::class)->getMockForAbstractClass();
        $subHydrator->expects($this->once())->method('get')->with('slug')->willReturn('slug');

        $hydrator = $this
            ->getMockBuilder(ResourceListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has', 'get'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('slug')->willReturn(true);
        $hydrator->expects($this->once())->method('get')->with('slug')->willReturn($subHydrator);

        /** @var ResourceListHydrator $hydrator */
        $model = new ResourceListModel($hydrator);

        $result = $model->get('slug');
        $this->assertInstanceOf(ResourceModel::class, $result);
        $this->assertSame('slug', $result->slug());
    }

    /**
     * Test the has() method for unknown resource slug.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceListModel::has()
     */
    public function testHasForUnknown()
    {
        $hydrator = $this
            ->getMockBuilder(ResourceListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('en')->willReturn(false);

        /** @var ResourceListHydrator $hydrator */
        $model = new ResourceListModel($hydrator);

        $this->assertFalse($model->has('en'));
    }

    /**
     * Test the has() method for known resource slug.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceListModel::has()
     */
    public function testHasForKnown()
    {
        $hydrator = $this
            ->getMockBuilder(ResourceListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('slug')->willReturn(true);

        /** @var ResourceListHydrator $hydrator */
        $model = new ResourceListModel($hydrator);

        $this->assertTrue($model->has('slug'));
    }

    /**
     * Test the add() method for unknown resource slug.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceListModel::add()
     */
    public function testAddForUnknown()
    {
        $subHydrator = $this->getMockBuilder(HydratorInterface::class)->getMockForAbstractClass();
        $subHydrator->expects($this->once())->method('get')->with('slug')->willReturn('slug');

        $hydrator = $this
            ->getMockBuilder(ResourceListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has', 'add'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('slug')->willReturn(false);
        $hydrator
            ->expects($this->once())
            ->method('add')
            ->with('slug', ['name' => 'resource name', 'i18n_type' => 'XLIFF'])
            ->willReturn($subHydrator);

        /** @var ResourceListHydrator $hydrator */
        $model = new ResourceListModel($hydrator);

        $result = $model->add('slug', 'resource name', 'XLIFF');
        $this->assertInstanceOf(ResourceModel::class, $result);
        $this->assertSame('slug', $result->slug());
    }

    /**
     * Test the add() method for unknown resource slug.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceListModel::add()
     */
    public function testAddForKnown()
    {
        $hydrator = $this
            ->getMockBuilder(ResourceListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('slug')->willReturn(true);

        /** @var ResourceListHydrator $hydrator */
        $model = new ResourceListModel($hydrator);

        if (method_exists($this, 'expectException')) {
            $this->expectException(\InvalidArgumentException::class);
            $this->expectExceptionMessage('Resource already in list: slug');
        } else {
            $this->setExpectedException(\InvalidArgumentException::class, 'Resource already in list: slug');
        }

        $model->add('slug', 'resource name', 'XLIFF');
    }

    /**
     * Test the remove() method for unknown resource slug.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceListModel::remove()
     */
    public function testRemoveForUnknown()
    {
        $hydrator = $this
            ->getMockBuilder(ResourceListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('slug')->willReturn(false);

        /** @var ResourceListHydrator $hydrator */
        $model = new ResourceListModel($hydrator);

        if (method_exists($this, 'expectException')) {
            $this->expectException(\InvalidArgumentException::class);
            $this->expectExceptionMessage('Resource not in list: slug');
        } else {
            $this->setExpectedException(\InvalidArgumentException::class, 'Resource not in list: slug');
        }

        $model->remove('slug');
    }

    /**
     * Test the remove() method for known resource slug.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceListModel::remove()
     */
    public function testRemoveForKnown()
    {
        $hydrator = $this
            ->getMockBuilder(ResourceListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has', 'remove'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('slug')->willReturn(true);
        $hydrator->expects($this->once())->method('remove')->with('slug');

        /** @var ResourceListHydrator $hydrator */
        $model = new ResourceListModel($hydrator);

        $model->remove('slug');
    }

    /**
     * Test that the names() method returns the hydrator names.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceListModel::names()
     */
    public function testCodes()
    {
        $hydrator = $this
            ->getMockBuilder(ResourceListHydrator::class)
            ->setMethods(['hydrators'])
            ->disableOriginalConstructor()
            ->getMock();
        $hydrator->expects($this->once())->method('hydrators')->willReturn(['slug1', 'slug2', 'slug3']);

        /** @var ResourceListHydrator $hydrator */
        $model = new ResourceListModel($hydrator);

        $this->assertSame(['slug1', 'slug2', 'slug3'], $model->names());
    }
}
