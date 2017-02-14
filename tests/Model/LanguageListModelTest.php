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
use CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageListHydrator;
use CyberSpectrum\PhpTransifex\Model\LanguageListModel;
use CyberSpectrum\PhpTransifex\Model\LanguageModel;

/**
 * This tests the LanguageListModel.
 */
class LanguageListModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test that the constructor sets the hydrator.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\LanguageListModel::__construct()
     */
    public function testConstructor()
    {
        $hydrator = $this
            ->getMockBuilder(LanguageListHydrator::class)
            ->disableOriginalConstructor()
            ->getMock();

        /** @var LanguageListHydrator $hydrator */
        $model = new LanguageListModel($hydrator);

        $this->assertSame($hydrator, $model->hydrator());
    }

    /**
     * Test the get() method for unknown language code.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\LanguageListModel::get()
     */
    public function testGetForUnknown()
    {
        $hydrator = $this
            ->getMockBuilder(LanguageListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('en')->willReturn(false);

        /** @var LanguageListHydrator $hydrator */
        $model = new LanguageListModel($hydrator);

        $this->setExpectedException('OutOfBoundsException', 'Language not in list: en');

        $model->get('en');
    }

    /**
     * Test the get() method for known language code.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\LanguageListModel::get()
     */
    public function testGetForKnown()
    {
        $subHydrator = $this->getMockForAbstractClass(HydratorInterface::class);
        $subHydrator->expects($this->once())->method('get')->with('language_code')->willReturn('en');

        $hydrator = $this
            ->getMockBuilder(LanguageListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has', 'get'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('en')->willReturn(true);
        $hydrator->expects($this->once())->method('get')->with('en')->willReturn($subHydrator);

        /** @var LanguageListHydrator $hydrator */
        $model = new LanguageListModel($hydrator);

        $result = $model->get('en');
        $this->assertInstanceOf(LanguageModel::class, $result);
        $this->assertSame('en', $result->languageCode());
    }

    /**
     * Test the has() method for unknown language code.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\LanguageListModel::has()
     */
    public function testHasForUnknown()
    {
        $hydrator = $this
            ->getMockBuilder(LanguageListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('en')->willReturn(false);

        /** @var LanguageListHydrator $hydrator */
        $model = new LanguageListModel($hydrator);

        $this->assertFalse($model->has('en'));
    }

    /**
     * Test the has() method for known language code.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\LanguageListModel::has()
     */
    public function testHasForKnown()
    {
        $hydrator = $this
            ->getMockBuilder(LanguageListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('en')->willReturn(true);

        /** @var LanguageListHydrator $hydrator */
        $model = new LanguageListModel($hydrator);

        $this->assertTrue($model->has('en'));
    }

    /**
     * Test the add() method for known language code.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\LanguageListModel::add()
     */
    public function testAddForUnknown()
    {
        $subHydrator = $this->getMockForAbstractClass(HydratorInterface::class);
        $subHydrator->expects($this->once())->method('get')->with('language_code')->willReturn('en');

        $hydrator = $this
            ->getMockBuilder(LanguageListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has', 'add'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('en')->willReturn(false);
        $hydrator->expects($this->once())->method('add')->with('en')->willReturn($subHydrator);

        /** @var LanguageListHydrator $hydrator */
        $model = new LanguageListModel($hydrator);

        $result = $model->add('en');
        $this->assertInstanceOf(LanguageModel::class, $result);
        $this->assertSame('en', $result->languageCode());
    }

    /**
     * Test the add() method for unknown language code.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\LanguageListModel::add()
     */
    public function testAddForKnown()
    {
        $hydrator = $this
            ->getMockBuilder(LanguageListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('en')->willReturn(true);

        /** @var LanguageListHydrator $hydrator */
        $model = new LanguageListModel($hydrator);

        $this->setExpectedException('InvalidArgumentException', 'Language already in list: en');

        $model->add('en');
    }

    /**
     * Test the remove() method for unknown language code.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\LanguageListModel::remove()
     */
    public function testRemoveForUnknown()
    {
        $hydrator = $this
            ->getMockBuilder(LanguageListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('en')->willReturn(false);

        /** @var LanguageListHydrator $hydrator */
        $model = new LanguageListModel($hydrator);

        $this->setExpectedException('InvalidArgumentException', 'Language not in list: en');

        $model->remove('en');
    }

    /**
     * Test the remove() method for known language code.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\LanguageListModel::remove()
     */
    public function testRemoveForKnown()
    {
        $hydrator = $this
            ->getMockBuilder(LanguageListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has', 'remove'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('en')->willReturn(true);
        $hydrator->expects($this->once())->method('remove')->with('en');

        /** @var LanguageListHydrator $hydrator */
        $model = new LanguageListModel($hydrator);

        $model->remove('en');
    }

    /**
     * Test that the codes() method returns the hydrator names.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\LanguageListModel::codes()
     */
    public function testCodes()
    {
        $hydrator = $this
            ->getMockBuilder(LanguageListHydrator::class)
            ->setMethods(['hydrators'])
            ->disableOriginalConstructor()
            ->getMock();
        $hydrator->expects($this->once())->method('hydrators')->willReturn(['en', 'de', 'fr']);

        /** @var LanguageListHydrator $hydrator */
        $model = new LanguageListModel($hydrator);

        $this->assertSame(['en', 'de', 'fr'], $model->codes());
    }
}
