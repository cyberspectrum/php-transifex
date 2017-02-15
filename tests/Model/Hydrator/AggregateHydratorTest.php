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

use CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator;
use CyberSpectrum\PhpTransifex\Model\Hydrator\HydratorInterface;

/**
 * This tests the AbstractHydrator.
 */
class AggregateHydratorTest extends HydratorTestCase
{
    /**
     * Test that the aggregator instantiaces sub hydrators.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator::__construct()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator::has()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator::hydrators()
     */
    public function testInstantiation()
    {
        $client = $this->mockClient();

        $hydrator = $this->getMockForAbstractClass(AggregateHydrator::class, [$client]);
        \Closure::bind(
            function () {
                $this->hydrators = [
                    'agg1' => null,
                    'agg2' => null,
                ];
            },
            $hydrator,
            AggregateHydrator::class
        )->__invoke();

        /** @var AggregateHydrator $hydrator */
        $this->assertTrue($hydrator->has('agg1'));
        $this->assertTrue($hydrator->has('agg2'));
        $this->assertSame(['agg1', 'agg2'], $hydrator->hydrators());
    }

    /**
     * Test that load() is called.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator::load()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator::hydrators()
     */
    public function testHydratorsCallsLoad()
    {
        $hydrator = $this->getMockForAbstractClass(AggregateHydrator::class, [$this->mockClient()]);
        $hydrator
            ->expects($this->once())
            ->method('doLoad')
            ->willReturnCallback(
                \Closure::bind(
                    function () {
                        $this->hydrators = [];
                    },
                    $hydrator,
                    AggregateHydrator::class
                )
            );

        /** @var AggregateHydrator $hydrator */
        $hydrator->hydrators();
    }

    /**
     * Test adding and retrieving.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator::has()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator::get()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator::hydrators()
     */
    public function testGet()
    {
        $client = $this->mockClient();

        $agg1 = $this->getMockForAbstractClass(HydratorInterface::class);

        $hydrator = $this->getMockForAbstractClass(AggregateHydrator::class, [$client]);
        \Closure::bind(
            function () use ($agg1) {
                $this->hydrators = ['agg1' => $agg1];
            },
            $hydrator,
            AggregateHydrator::class
        )->__invoke();

        /** @var AggregateHydrator $hydrator */

        $this->assertTrue($hydrator->has('agg1'));
        $this->assertSame($agg1, $hydrator->get('agg1'));
        $this->assertSame(['agg1'], $hydrator->hydrators());
    }

    /**
     * Test retrieval of unknown instances.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator::load()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator::get()
     */
    public function testGetUnknownResultsInException()
    {
        $client = $this->mockClient();

        $hydrator = $this->getMockForAbstractClass(AggregateHydrator::class, [$client]);
        $hydrator
            ->expects($this->once())
            ->method('doLoad')
            ->willReturnCallback(
                \Closure::bind(
                    function () {
                        $this->hydrators = [];
                    },
                    $hydrator,
                    AggregateHydrator::class
                )
            );

        $this->setExpectedException('RuntimeException', 'Hydrator agg1 is not registered.');

        /** @var AggregateHydrator $hydrator */
        $hydrator->get('agg1');
    }

    /**
     * Test existence check of unknown instances.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator::load()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator::has()
     */
    public function testHasUnknown()
    {
        $client = $this->mockClient();

        $hydrator = $this->getMockForAbstractClass(AggregateHydrator::class, [$client]);
        $hydrator
            ->expects($this->once())
            ->method('doLoad')
            ->willReturnCallback(
                \Closure::bind(
                    function () {
                        $this->hydrators = [];
                    },
                    $hydrator,
                    AggregateHydrator::class
                )
            );

        /** @var AggregateHydrator $hydrator */
        $this->assertFalse($hydrator->has('agg1'));
    }

    /**
     * Test saving.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator::save()
     */
    public function testSave()
    {
        $agg1 = $this->getMockForAbstractClass(HydratorInterface::class);
        $agg1->expects($this->once())->method('save');
        $agg2 = $this->getMockForAbstractClass(HydratorInterface::class);
        $agg2->expects($this->once())->method('save');

        $client   = $this->mockClient();
        $hydrator = $this->getMockForAbstractClass(AggregateHydrator::class, [$client]);

        \Closure::bind(
            function () use ($agg1, $agg2) {
                $this->hydrators = [
                    'agg1' => $agg1,
                    'agg2' => $agg2,
                ];
            },
            $hydrator,
            AggregateHydrator::class
        )->__invoke();

        /** @var AggregateHydrator $hydrator */
        $hydrator->save();
    }

    /**
     * Test existence check of unknown instances.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydrator::doAdd()
     */
    public function testDoAddCreatesAggregator()
    {
        $client = $this->mockClient();
        $agg1   = $this->getMockForAbstractClass(HydratorInterface::class);

        $hydrator = $this->getMockForAbstractClass(AggregateHydrator::class, [$client]);
        $hydrator
            ->expects($this->once())
            ->method('createHydrator')
            ->with('agg1', ['data' => 'value'])
            ->willReturn($agg1);

        \Closure::bind(
            function () use ($agg1) {
                $this->doAdd('agg1', ['data' => 'value']);
            },
            $hydrator,
            AggregateHydrator::class
        )->__invoke();

        /** @var AggregateHydrator $hydrator */
        $this->assertTrue($hydrator->has('agg1'));
        $this->assertSame($agg1, $hydrator->get('agg1'));
    }
}
