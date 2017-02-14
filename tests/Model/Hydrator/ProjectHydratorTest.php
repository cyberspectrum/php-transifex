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

use CyberSpectrum\PhpTransifex\Api\Project;
use CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageListHydrator;
use CyberSpectrum\PhpTransifex\Model\Hydrator\ProjectHydrator;
use CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceListHydrator;

/**
 * This tests the ProjectHydrator.
 */
class ProjectHydratorTest extends HydratorTestCase
{
    /**
     * Test the obtaining of the language list hydrator.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ProjectHydrator::languageListHydrator()
     */
    public function testObtainLanguageListHydrator()
    {
        /** @var ProjectHydrator|\PHPUnit_Framework_MockObject_MockObject $hydrator */
        $hydrator = $this
            ->getMockBuilder(ProjectHydrator::class)
            ->setConstructorArgs([$this->mockClient()])
            ->setMethods(['exists', 'get'])
            ->getMock();
        $hydrator->expects($this->once())->method('exists')->willReturn(true);
        $hydrator->expects($this->once())->method('get')->with('slug')->willReturn('project-slug');

        $languageListHydrator = $hydrator->languageListHydrator();
        $this->assertInstanceOf(LanguageListHydrator::class, $languageListHydrator);
        $this->assertSame($languageListHydrator, $hydrator->languageListHydrator());
    }

    /**
     * Test the obtaining of the language list hydrator throws an exception for non existent projects.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ProjectHydrator::languageListHydrator()
     */
    public function testObtainLanguageListHydratorExceptionForNonExistentProject()
    {
        /** @var ProjectHydrator|\PHPUnit_Framework_MockObject_MockObject $hydrator */
        $hydrator = $this
            ->getMockBuilder(ProjectHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['exists'])
            ->getMock();

        $hydrator->method('exists')->willReturn(false);

        $this->setExpectedException('RuntimeException', 'Project must be created before accessing the languages');

        $hydrator->languageListHydrator();
    }

    /**
     * Test the obtaining of the resource list hydrator.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ProjectHydrator::resourceListHydrator()
     */
    public function testObtainResourceListHydrator()
    {
        /** @var ProjectHydrator|\PHPUnit_Framework_MockObject_MockObject $hydrator */
        $hydrator = $this
            ->getMockBuilder(ProjectHydrator::class)
            ->setConstructorArgs([$this->mockClient()])
            ->setMethods(['exists', 'get'])
            ->getMock();
        $hydrator->expects($this->once())->method('exists')->willReturn(true);
        $hydrator->expects($this->once())->method('get')->with('slug')->willReturn('project-slug');

        $resourceListHydrator = $hydrator->resourceListHydrator();
        $this->assertInstanceOf(ResourceListHydrator::class, $resourceListHydrator);
        $this->assertSame($resourceListHydrator, $hydrator->resourceListHydrator());
    }

    /**
     * Test the obtaining of the resource list hydrator throws an exception for non existent projects.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ProjectHydrator::resourceListHydrator()
     */
    public function testObtainResourceListHydratorExceptionForNonExistentProject()
    {
        /** @var ProjectHydrator|\PHPUnit_Framework_MockObject_MockObject $hydrator */
        $hydrator = $this
            ->getMockBuilder(ProjectHydrator::class)
            ->disableOriginalConstructor()
            ->setMethods(['exists'])
            ->getMock();

        $hydrator->method('exists')->willReturn(false);

        $this->setExpectedException('RuntimeException', 'Project must be created before accessing the languages');

        $hydrator->resourceListHydrator();
    }

    /**
     * Test the doLoad method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ProjectHydrator::doLoad()
     */
    public function testDoLoad()
    {
        $projectApi = $this
            ->getMockBuilder(Project::class)
            ->disableOriginalConstructor()
            ->setMethods(['show'])
            ->getMock();
        $projectApi
            ->expects($this->once())
            ->method('show')
            ->with('project-slug', true)
            ->willReturn(['slug' => 'project-slug', 'test' => 'value', 'foo' => 'bar']);
        $client = $this->mockClient(['project' => $projectApi]);

        /** @var ProjectHydrator|\PHPUnit_Framework_MockObject_MockObject $hydrator */
        $hydrator = new ProjectHydrator($client, ['slug' => 'project-slug']);

        $hydrator->load();

        $this->assertSame('project-slug', $hydrator->get('slug'));
        $this->assertSame('value', $hydrator->get('test'));
        $this->assertSame('bar', $hydrator->get('foo'));
    }

    /**
     * Test the doSave method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ProjectHydrator::doSave()
     */
    public function testDoSave()
    {
        $projectApi = $this
            ->getMockBuilder(Project::class)
            ->disableOriginalConstructor()
            ->setMethods(['update'])
            ->getMock();
        $projectApi
            ->expects($this->once())
            ->method('update')
            ->with('project-slug', ['slug' => 'project-slug', 'test' => 'value', 'foo' => 'bar']);
        $client = $this->mockClient(['project' => $projectApi]);

        /** @var ProjectHydrator|\PHPUnit_Framework_MockObject_MockObject $hydrator */
        $hydrator = $this->getMock(ProjectHydrator::class, ['load'], [$client, ['slug' => 'project-slug']]);
        $hydrator->set('test', 'value');
        $hydrator->set('foo', 'bar');

        $hydrator->save();
    }

    /**
     * Test the doSave method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ProjectHydrator::doCreate()
     */
    public function testDoCreate()
    {
        $projectApi = $this
            ->getMockBuilder(Project::class)
            ->disableOriginalConstructor()
            ->setMethods(['create'])
            ->getMock();
        $projectApi
            ->expects($this->once())
            ->method('create')
            ->with(
                [
                    'slug'                 => 'project-slug',
                    'name'                 => 'project name',
                    'description'          => 'description text',
                    'source_language_code' => 'language code',
                    'pending'              => 'attribute'
                ]
            );
        $client = $this->mockClient(['project' => $projectApi]);

        /** @var ProjectHydrator|\PHPUnit_Framework_MockObject_MockObject $hydrator */
        $hydrator = $this->getMock(
            ProjectHydrator::class,
            ['load'],
            [$client, [
                'slug' => 'project-slug',
                'name' => 'project name',
                'description' => 'description text',
                'source_language_code' => 'language code',
                'pending' => 'attribute'
            ]]
        );

        $hydrator->create();
    }

    /**
     * Test the doDelete method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ProjectHydrator::doDelete()
     */
    public function testDoDelete()
    {
        $projectApi = $this
            ->getMockBuilder(Project::class)
            ->disableOriginalConstructor()
            ->setMethods(['remove'])
            ->getMock();
        $projectApi
            ->expects($this->once())
            ->method('remove')
            ->with('project-slug');
        $client = $this->mockClient(['project' => $projectApi]);

        /** @var ProjectHydrator|\PHPUnit_Framework_MockObject_MockObject $hydrator */
        $hydrator = new ProjectHydrator($client, ['slug' => 'project-slug']);

        $hydrator->delete();
    }
}
