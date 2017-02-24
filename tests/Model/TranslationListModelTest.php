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
use CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationListHydrator;
use CyberSpectrum\PhpTransifex\Model\TranslationListModel;
use CyberSpectrum\PhpTransifex\Model\TranslationModel;

/**
 * This tests the TranslationListModel.
 */
class TranslationListModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test the get() method for unknown language code.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\TranslationListModel::get()
     */
    public function testGetForUnknown()
    {
        $hydrator = $this
            ->getMockBuilder(TranslationListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('langcode')->willReturn(false);

        /** @var TranslationListHydrator $hydrator */
        $model = new TranslationListModel($hydrator);

        $this->setExpectedException('OutOfBoundsException', 'Language not in list: langcode');

        $model->get('langcode');
    }

    /**
     * Test the get() method for known language code.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\TranslationListModel::get()
     */
    public function testGetForKnown()
    {
        $subHydrator = $this->getMockForAbstractClass(HydratorInterface::class);

        $hydrator = $this
            ->getMockBuilder(TranslationListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has', 'get'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('langcode')->willReturn(true);
        $hydrator->expects($this->once())->method('get')->with('langcode')->willReturn($subHydrator);

        /** @var TranslationListHydrator $hydrator */
        $model = new TranslationListModel($hydrator);

        $result = $model->get('langcode');
        $this->assertInstanceOf(TranslationModel::class, $result);
    }

    /**
     * Test the has() method for unknown language code.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\TranslationListModel::has()
     */
    public function testHasForUnknown()
    {
        $hydrator = $this
            ->getMockBuilder(TranslationListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('en')->willReturn(false);

        /** @var TranslationListHydrator $hydrator */
        $model = new TranslationListModel($hydrator);

        $this->assertFalse($model->has('en'));
    }

    /**
     * Test the has() method for known language code.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\TranslationListModel::has()
     */
    public function testHasForKnown()
    {
        $hydrator = $this
            ->getMockBuilder(TranslationListHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['has'])
            ->getMock();
        $hydrator->expects($this->once())->method('has')->with('langcode')->willReturn(true);

        /** @var TranslationListHydrator $hydrator */
        $model = new TranslationListModel($hydrator);

        $this->assertTrue($model->has('langcode'));
    }

    /**
     * Test that the names() method returns the hydrator names.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\TranslationListModel::codes()
     */
    public function testCodes()
    {
        $hydrator = $this
            ->getMockBuilder(TranslationListHydrator::class)
            ->setMethods(['hydrators'])
            ->disableOriginalConstructor()
            ->getMock();
        $hydrator->expects($this->once())->method('hydrators')->willReturn(['code1', 'code2', 'code3']);

        /** @var TranslationListHydrator $hydrator */
        $model = new TranslationListModel($hydrator);

        $this->assertSame(['code1', 'code2', 'code3'], $model->codes());
    }
}
