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

/**
 * This tests the ResourceHydrator.
 */
class ResourceHydratorTest extends HydratorTestCase
{
    /**
     * Test the doLoad method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceHydrator::doLoad()
     */
    public function testDoLoad()
    {
        $resourceApi = $this
            ->getMockBuilder(Resource::class)
            ->disableOriginalConstructor()
            ->setMethods(['show'])
            ->getMock();
        $resourceApi
            ->expects($this->once())
            ->method('show')
            ->with('project-slug', 'resource-slug')
            ->willReturn(['test' => 'value', 'foo' => 'bar']);
        $client = $this->mockClient(['resource' => $resourceApi]);

        $hydrator = new ResourceHydrator($client, 'project-slug', 'resource-slug', []);

        $hydrator->load();

        $this->assertSame('value', $hydrator->get('test'));
        $this->assertSame('bar', $hydrator->get('foo'));
    }

    /**
     * Test the doSave method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceHydrator::doSave()
     */
    public function testDoSave()
    {
        $languageApi = $this
            ->getMockBuilder(Resource::class)
            ->disableOriginalConstructor()
            ->setMethods(['upload'])
            ->getMock();
        $languageApi
            ->expects($this->once())
            ->method('upload')
            ->with('project-slug', 'resource-slug', 'foo');
        $client = $this->mockClient(['resource' => $languageApi]);

        /** @var ResourceHydrator $hydrator */
        $hydrator = $this->getMock(ResourceHydrator::class, ['load'], [$client, 'project-slug', 'resource-slug']);
        $hydrator->set('content', 'foo');

        $hydrator->save();
    }

    /**
     * Test the doSave method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceHydrator::doCreate()
     */
    public function testDoCreate()
    {
        $languageApi = $this
            ->getMockBuilder(Resource::class)
            ->disableOriginalConstructor()
            ->setMethods(['create'])
            ->getMock();
        $languageApi
            ->expects($this->once())
            ->method('create')
            ->with(
                'project-slug',
                'Test resource',
                'resource-slug',
                'XLIFF'
            );
        $client = $this->mockClient(['resource' => $languageApi]);

        /** @var ResourceHydrator $hydrator */
        $hydrator = $this->getMock(ResourceHydrator::class, ['load'], [$client, 'project-slug', 'resource-slug']);
        $hydrator->set('name', 'Test resource');
        $hydrator->set('i18n_type', 'XLIFF');

        $hydrator->create();
    }

    /**
     * Test the doDelete method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceHydrator::doDelete()
     */
    public function testDoDelete()
    {
        $languageApi = $this
            ->getMockBuilder(Resource::class)
            ->disableOriginalConstructor()
            ->setMethods(['remove'])
            ->getMock();
        $languageApi
            ->expects($this->once())
            ->method('remove')
            ->with('project-slug', 'resource-slug');
        $client = $this->mockClient(['resource' => $languageApi]);

        /** @var ResourceHydrator|\PHPUnit_Framework_MockObject_MockObject $hydrator */
        $hydrator = new ResourceHydrator($client, 'project-slug', 'resource-slug');

        $hydrator->delete();
    }
}
