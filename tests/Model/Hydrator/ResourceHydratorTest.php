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
use CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydratorInterface;
use CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceHydrator;
use CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationListHydrator;

/**
 * This tests the ResourceHydrator.
 */
class ResourceHydratorTest extends HydratorTestCase
{
    /**
     * Test the translationListHydrator method.
     *
     * @return void
     */
    public function testTranslationListHydrator()
    {
        /** @var ResourceHydrator|\PHPUnit_Framework_MockObject_MockObject $hydrator */
        $hydrator = $this->getMock(
            ResourceHydrator::class,
            ['exists'],
            [$this->mockClient(), 'project-slug', 'resource-slug']
        );
        $hydrator->expects($this->once())->method('exists')->willReturn(true);

        $translations = $hydrator->translationListHydrator();
        $this->assertInstanceOf(TranslationListHydrator::class, $translations);
        $this->assertSame($translations, $hydrator->translationListHydrator());
    }

    /**
     * Test the translationListHydrator method.
     *
     * @return void
     */
    public function testTranslationListHydratorForNonexistent()
    {
        /** @var ResourceHydrator|\PHPUnit_Framework_MockObject_MockObject $hydrator */
        $hydrator = $this->getMock(
            ResourceHydrator::class,
            ['exists'],
            [$this->mockClient(), 'project-slug', 'resource-slug']
        );
        $hydrator->expects($this->once())->method('exists')->willReturn(false);

        $this->setExpectedException('RuntimeException', 'Resource must be created before accessing the translations');
        $hydrator->translationListHydrator();
    }

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
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceHydrator::doSave()
     */
    public function testDoSaveOnlySavesPending()
    {
        $languageApi = $this
            ->getMockBuilder(Resource::class)
            ->disableOriginalConstructor()
            ->setMethods(['upload'])
            ->getMock();
        $languageApi
            ->expects($this->never())
            ->method('upload');
        $client = $this->mockClient(['resource' => $languageApi]);

        /** @var ResourceHydrator $hydrator */
        $hydrator = $this->getMock(ResourceHydrator::class, ['load'], [$client, 'project-slug', 'resource-slug']);

        $hydrator->save();
    }

    /**
     * Test the doSave method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceHydrator::doSave()
     */
    public function testDoSaveAlsoSavesTranslations()
    {
        $client = $this->mockClient();

        $translationList = $this->getMockForAbstractClass(AggregateHydratorInterface::class);
        $translationList->expects($this->once())->method('save');

        /** @var ResourceHydrator $hydrator */
        $hydrator = $this->getMock(ResourceHydrator::class, ['load'], [$client, 'project-slug', 'resource-slug']);

        $reflection = new \ReflectionProperty(ResourceHydrator::class, 'translationListHydrator');
        $reflection->setAccessible(true);
        $reflection->setValue($hydrator, $translationList);

        $hydrator->save();
    }

    /**
     * Test the doCreate method.
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

        $hydrator = new ResourceHydrator($client, 'project-slug', 'resource-slug');

        $hydrator->delete();
    }

    /**
     * Test the download method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceHydrator::download()
     */
    public function testDownload()
    {
        $languageApi = $this
            ->getMockBuilder(Resource::class)
            ->disableOriginalConstructor()
            ->setMethods(['download'])
            ->getMock();
        $languageApi
            ->expects($this->once())
            ->method('download')
            ->with('project-slug', 'resource-slug')
            ->willReturn('file contents');
        $client = $this->mockClient(['resource' => $languageApi]);

        /** @var ResourceHydrator|\PHPUnit_Framework_MockObject_MockObject $hydrator */
        $hydrator = $this->getMock(ResourceHydrator::class, ['exists'], [$client, 'project-slug', 'resource-slug']);
        $hydrator->expects($this->once())->method('exists')->willReturn(true);

        $this->assertSame('file contents', $hydrator->download());
    }

    /**
     * Test the download method throws an exception when the resource has not been created yet.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceHydrator::download()
     */
    public function testDownloadThrowsExceptionForNonexistent()
    {
        $languageApi = $this
            ->getMockBuilder(Resource::class)
            ->disableOriginalConstructor()
            ->setMethods(['download'])
            ->getMock();
        $languageApi
            ->expects($this->never())
            ->method('download');
        $client = $this->mockClient(['resource' => $languageApi]);

        /** @var ResourceHydrator|\PHPUnit_Framework_MockObject_MockObject $hydrator */
        $hydrator = $this->getMock(ResourceHydrator::class, ['exists'], [$client, 'project-slug', 'resource-slug']);
        $hydrator->expects($this->once())->method('exists')->willReturn(false);

        $this->setExpectedException('RuntimeException', 'Resource must be created before downloading');

        $hydrator->download();
    }
}
