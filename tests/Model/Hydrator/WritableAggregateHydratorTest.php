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

use CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator;
use CyberSpectrum\PhpTransifex\Model\Hydrator\HydratorInterface;

/**
 * This tests the WritableAbstractHydrator.
 */
class WritableAggregateHydratorTest extends HydratorTestCase
{
    /**
     * Test that the aggregator instantiaces sub hydrators.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::__construct()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::has()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::hydrators()
     */
    public function testInstantiation()
    {
        $client = $this->mockClient();

        $hydrator = $this->getMockForAbstractClass(
            WritableAggregateHydrator::class,
            [
                $client,
                [
                    'agg1' => ['data1' => 'value1'],
                    'agg2' => ['data2' => 'value2'],
                ]
            ]
        );

        /** @var WritableAggregateHydrator $hydrator */
        $this->assertTrue($hydrator->has('agg1'));
        $this->assertTrue($hydrator->has('agg2'));
        $this->assertSame(['agg1', 'agg2'], $hydrator->hydrators());
    }

    /**
     * Test that load() is called.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::hydrators()
     */
    public function testHydratorsCallsLoad()
    {
        $hydrator = $this->getMockForAbstractClass(WritableAggregateHydrator::class, [$this->mockClient()]);
        $hydrator
            ->expects($this->once())
            ->method('doLoad')
            ->willReturnCallback(
                \Closure::bind(
                    function () {
                        $this->hydrators = [];
                    },
                    $hydrator,
                    WritableAggregateHydrator::class
                )
            );

        /** @var WritableAggregateHydrator $hydrator */
        $hydrator->hydrators();
    }

    /**
     * Test adding and retrieving.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::add()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::has()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::get()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::hydrators()
     */
    public function testAddAndGet()
    {
        $client = $this->mockClient();

        $agg1 = $this->getMockForAbstractClass(HydratorInterface::class);

        $hydrator = $this->getMockForAbstractClass(WritableAggregateHydrator::class, [$client]);
        $hydrator
            ->expects($this->once())
            ->method('createHydrator')
            ->with('agg1', ['data1' => 'value1'])
            ->willReturn($agg1);

        /** @var WritableAggregateHydrator $hydrator */
        $hydrator->add('agg1', ['data1' => 'value1']);

        $this->assertTrue($hydrator->has('agg1'));
        $this->assertSame($agg1, $hydrator->get('agg1'));
        $this->assertSame(['agg1'], $hydrator->hydrators());
    }

    /**
     * Test retrieval of unknown instances.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::get()
     */
    public function testGetUnknownResultsInException()
    {
        $client = $this->mockClient();

        $hydrator = $this->getMockForAbstractClass(WritableAggregateHydrator::class, [$client]);
        $hydrator
            ->expects($this->once())
            ->method('doLoad')
            ->willReturnCallback(
                \Closure::bind(
                    function () {
                        $this->hydrators = [];
                    },
                    $hydrator,
                    WritableAggregateHydrator::class
                )
            );

        if (method_exists($this, 'expectException')) {
            $this->expectException(\RuntimeException::class);
            $this->expectExceptionMessage('Hydrator agg1 is not registered.');
        } else {
            $this->setExpectedException(\RuntimeException::class, 'Hydrator agg1 is not registered.');
        }

        /** @var WritableAggregateHydrator $hydrator */
        $hydrator->get('agg1');
    }

    /**
     * Test existence check of unknown instances.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::has()
     */
    public function testHasUnknown()
    {
        $client = $this->mockClient();

        $hydrator = $this->getMockForAbstractClass(WritableAggregateHydrator::class, [$client]);
        $hydrator
            ->expects($this->once())
            ->method('doLoad')
            ->willReturnCallback(
                \Closure::bind(
                    function () {
                        $this->hydrators = [];
                    },
                    $hydrator,
                    WritableAggregateHydrator::class
                )
            );

        /** @var WritableAggregateHydrator $hydrator */
        $this->assertFalse($hydrator->has('agg1'));
    }

    /**
     * Test removal of unknown instances.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::remove()
     */
    public function testRemoveUnknownResultsInException()
    {
        $client = $this->mockClient();

        $hydrator = $this->getMockForAbstractClass(WritableAggregateHydrator::class, [$client]);
        $hydrator
            ->expects($this->once())
            ->method('doLoad')
            ->willReturnCallback(
                \Closure::bind(
                    function () {
                        $this->hydrators = [];
                    },
                    $hydrator,
                    WritableAggregateHydrator::class
                )
            );

        if (method_exists($this, 'expectException')) {
            $this->expectException(\RuntimeException::class);
            $this->expectExceptionMessage('Hydrator agg1 is not registered.');
        } else {
            $this->setExpectedException(\RuntimeException::class, 'Hydrator agg1 is not registered.');
        }

        /** @var WritableAggregateHydrator $hydrator */
        $hydrator->remove('agg1');
    }

    /**
     * Test that the aggregator removes sub hydrators.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::remove()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::has()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::hydrators()
     */
    public function testRemoval()
    {
        $client = $this->mockClient();

        $hydrator = $this->getMockForAbstractClass(
            WritableAggregateHydrator::class,
            [
                $client,
                [
                    'agg1' => ['data1' => 'value1'],
                    'agg2' => ['data2' => 'value2'],
                ]
            ]
        );

        /** @var WritableAggregateHydrator $hydrator */
        $hydrator->remove('agg1');
        $this->assertFalse($hydrator->has('agg1'));
        $this->assertTrue($hydrator->has('agg2'));
        $this->assertSame(['agg2'], $hydrator->hydrators());
    }

    /**
     * Test saving.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::save()
     */
    public function testSave()
    {
        $agg1 = $this->getMockForAbstractClass(HydratorInterface::class);
        $agg1->expects($this->once())->method('exists')->willReturn(true);
        $agg1->expects($this->once())->method('save');
        $agg2 = $this->getMockForAbstractClass(HydratorInterface::class);
        $agg2->expects($this->once())->method('exists')->willReturn(false);
        $agg2->expects($this->once())->method('create');

        $client   = $this->mockClient();
        $hydrator = $this->getMockForAbstractClass(WritableAggregateHydrator::class, [$client]);
        $hydrator
            ->expects($this->once())
            ->method('doLoad');
        $hydrator
            ->expects($this->exactly(2))
            ->method('createHydrator')
            ->withConsecutive(
                ['agg1', ['data1' => 'value1']],
                ['agg2', ['data2' => 'value2']]
            )
            ->willReturnOnConsecutiveCalls($agg1, $agg2);

        /** @var WritableAggregateHydrator $hydrator */
        $hydrator->add('agg1', ['data1' => 'value1']);
        $hydrator->add('agg2', ['data2' => 'value2']);

        $hydrator->save();
    }

    /**
     * Test saving with deleted sub hydrator.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\WritableAggregateHydrator::save()
     */
    public function testSaveDeletedSub()
    {
        $agg1 = $this->getMockForAbstractClass(HydratorInterface::class);
        $agg1->expects($this->once())->method('delete');

        $client   = $this->mockClient();
        $hydrator = $this->getMockForAbstractClass(WritableAggregateHydrator::class, [$client]);
        $hydrator
            ->expects($this->once())
            ->method('doLoad')
            ->willReturnCallback(
                \Closure::bind(
                    function () use ($agg1) {
                        $this->hydrators = ['agg1' => $agg1];
                    },
                    $hydrator,
                    WritableAggregateHydrator::class
                )
            );

        /** @var WritableAggregateHydrator $hydrator */
        $hydrator->remove('agg1');

        $hydrator->save();
    }
}
