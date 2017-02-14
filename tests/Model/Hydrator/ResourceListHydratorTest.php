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

use CyberSpectrum\PhpTransifex\Api\Resource;
use CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceHydrator;
use CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceListHydrator;

/**
 * This tests the ResourceListHydrator.
 */
class ResourceListHydratorTest extends HydratorTestCase
{
    /**
     * Test that initialization.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceListHydrator::__construct()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceListHydrator::createHydrator
     */
    public function testInitialize()
    {
        $resourceApi = $this
            ->getMockBuilder(Resource::class)
            ->setMethods(['all'])
            ->disableOriginalConstructor()
            ->getMock();
        $resourceApi->expects($this->once())->method('all')->willReturn([]);
        $hydrator = new ResourceListHydrator(
            $this->mockClient(['resource' => $resourceApi]),
            'project-slug',
            ['resource-slug' => []]
        );

        $this->assertSame(['resource-slug'], $hydrator->hydrators());
        $this->assertTrue($hydrator->has('resource-slug'));
    }

    /**
     * Test that adding works.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceListHydrator::createHydrator
     */
    public function testAdd()
    {
        $resourceApi = $this
            ->getMockBuilder(Resource::class)
            ->setMethods(['all'])
            ->disableOriginalConstructor()
            ->getMock();
        $resourceApi->expects($this->once())->method('all')->willReturn([]);
        $hydrator = new ResourceListHydrator(
            $this->mockClient(['resource' => $resourceApi]),
            'project-slug',
            ['resource-slug' => []]
        );

        $sub1 = $hydrator->add('resource-slug', []);

        $this->assertInstanceOf(ResourceHydrator::class, $sub1);
    }

    /**
     * Test that the load method adds all languages.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceListHydrator::doLoad
     */
    public function testLoadAddsAll()
    {
        $resourceApi = $this
            ->getMockBuilder(Resource::class)
            ->setMethods(['all'])
            ->disableOriginalConstructor()
            ->getMock();

        $resourceApi->expects($this->once())->method('all')->willReturn(
            [
                ['slug' => 'resource-slug']
            ]
        );

        $hydrator = new ResourceListHydrator($this->mockClient(['resource' => $resourceApi]), 'project-slug');

        $this->assertSame(['resource-slug'], $hydrator->hydrators());
        $this->assertTrue($hydrator->has('resource-slug'));
    }
}
