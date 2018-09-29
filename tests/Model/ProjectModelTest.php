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

use CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageListHydrator;
use CyberSpectrum\PhpTransifex\Model\Hydrator\ProjectHydrator;
use CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceListHydrator;
use CyberSpectrum\PhpTransifex\Model\LanguageListModel;
use CyberSpectrum\PhpTransifex\Model\ProjectModel;
use CyberSpectrum\PhpTransifex\Model\ResourceListModel;
use PHPUnit\Framework\TestCase;

/**
 * This tests the ProjectModel.
 */
class ProjectModelTest extends TestCase
{
    /**
     * Data provider for the value getter test.
     *
     * @return array
     */
    public function getValueProvider()
    {
        return [
            // Value, key in hydrator, method name.
            'slug'               => ['Slug', 'slug', 'slug'],
            'name'               => ['Name', 'name', 'name'],
            'sourceLanguageCode' => ['en', 'source_language_code', 'sourceLanguageCode'],
            'archived'           => [false, 'archived', 'isArchived'],
            'description'        => ['description text', 'description', 'description'],
            'transInstructions'  => ['http://example.org/instructions', 'trans_instructions', 'transInstructions'],
            'private'            => [true, 'private', 'isPrivate'],
            'auto_join'          => [true, 'auto_join', 'isAutoJoin'],
            'fill_up_resources'  => [true, 'fill_up_resources', 'isFillUpResources'],
            'organization'       => ['organization name', 'organization', 'organization'],
            'homepage'           => ['http://example.org/', 'homepage', 'homepage'],
            'long_description'   => ['long description text', 'long_description', 'longDescription'],
        ];
    }

    /**
     * Test the value getter methods.
     *
     * @param string $expected   The value to expect and return from hydrator.
     * @param string $keyName    The key to be called in hydrator.
     * @param string $methodName The method to call.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::slug()
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::name()
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::sourceLanguageCode()
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::isArchived()
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::description()
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::transInstructions()
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::isPrivate()
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::isAutoJoin()
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::isFillUpResources()
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::organization()
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::homepage()
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::longDescription()
     *
     * @dataProvider getValueProvider
     */
    public function testGetValue($expected, $keyName, $methodName)
    {
        $hydrator = $this
            ->getMockBuilder(ProjectHydrator::class)
            ->setMethods(['get'])
            ->disableOriginalConstructor()
            ->getMock();
        $hydrator->expects($this->once())->method('get')->with($keyName)->willReturn($expected);

        /** @var ProjectHydrator $hydrator */
        $model = new ProjectModel($hydrator);

        $this->assertSame($expected, $model->$methodName());
    }

    /**
     * Test that the tags method returns the array of tags.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::tags()
     */
    public function testTags()
    {
        $hydrator = $this
            ->getMockBuilder(ProjectHydrator::class)
            ->setMethods(['get'])
            ->disableOriginalConstructor()
            ->getMock();
        $hydrator->expects($this->once())->method('get')->with('tags')->willReturn('x,y,z');

        /** @var ProjectHydrator $hydrator */
        $model = new ProjectModel($hydrator);

        $this->assertSame(['x', 'y', 'z'], $model->tags());
    }

    /**
     * Test that the languages method returns the model.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::languages()
     */
    public function testLanguages()
    {
        $listHydrator = $this
            ->getMockBuilder(LanguageListHydrator::class)
            ->disableOriginalConstructor()
            ->getMock();

        $hydrator = $this
            ->getMockBuilder(ProjectHydrator::class)
            ->setMethods(['languageListHydrator'])
            ->disableOriginalConstructor()
            ->getMock();
        $hydrator->expects($this->once())->method('languageListHydrator')->willReturn($listHydrator);

        /** @var ProjectHydrator $hydrator */
        $model = new ProjectModel($hydrator);

        $result = $model->languages();

        $this->assertInstanceOf(LanguageListModel::class, $result);
        $this->assertSame($listHydrator, $result->hydrator());
    }

    /**
     * Test that the languages method returns the model.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ProjectModel::resources()
     */
    public function testResources()
    {
        $listHydrator = $this
            ->getMockBuilder(ResourceListHydrator::class)
            ->disableOriginalConstructor()
            ->getMock();

        $hydrator = $this
            ->getMockBuilder(ProjectHydrator::class)
            ->setMethods(['resourceListHydrator'])
            ->disableOriginalConstructor()
            ->getMock();
        $hydrator->expects($this->once())->method('resourceListHydrator')->willReturn($listHydrator);

        /** @var ProjectHydrator $hydrator */
        $model = new ProjectModel($hydrator);

        $result = $model->resources();

        $this->assertInstanceOf(ResourceListModel::class, $result);
        $this->assertSame($listHydrator, $result->hydrator());
    }
}
