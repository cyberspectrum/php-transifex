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

use CyberSpectrum\PhpTransifex\Model\Hydrator\ResourceHydrator;
use CyberSpectrum\PhpTransifex\Model\ResourceModel;

/**
 * This tests the ResourceModel.
 */
class ResourceModelTest extends \PHPUnit_Framework_TestCase
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
            'name'               => ['Name', 'name', 'name'],
            'slug'               => ['Slug', 'slug', 'slug'],
            'sourceLanguageCode' => ['Slug', 'source_language_code', 'sourceLanguageCode'],
            'i18nType'           => ['XLIFF', 'i18n_type', 'i18nType'],
            'categories'         => ['Slug', 'categories', 'categories'],
            'priority'           => ['Slug', 'priority', 'priority'],
            'availableLanguages' => ['Slug', 'available_languages', 'availableLanguages'],
            'wordcount'          => ['Slug', 'wordcount', 'wordcount'],
            'totalEntities'      => ['Slug', 'total_entities', 'totalEntities'],
            'acceptTranslations' => [true, 'accept_translations', 'acceptTranslations'],
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
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceModel::name()
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceModel::slug()
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceModel::sourceLanguageCode()
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceModel::i18nType()
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceModel::categories()
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceModel::priority()
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceModel::availableLanguages()
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceModel::wordcount()
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceModel::totalEntities()
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceModel::acceptTranslations()
     *
     * @dataProvider getValueProvider
     */
    public function testGetValue($expected, $keyName, $methodName)
    {
        $hydrator = $this
            ->getMockBuilder(ResourceHydrator::class)
            ->setMethods(['get'])
            ->disableOriginalConstructor()
            ->getMock();
        $hydrator->expects($this->once())->method('get')->with($keyName)->willReturn($expected);

        /** @var ResourceHydrator $hydrator */
        $model = new ResourceModel($hydrator);

        $this->assertSame($expected, $model->$methodName());
    }

    /**
     * Test the created() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceModel::created()
     */
    public function testCreated()
    {
        $date = new \DateTime($dateString = '2010-01-28T15:00:00+02:00');

        $hydrator = $this
            ->getMockBuilder(ResourceHydrator::class)
            ->setMethods(['get'])
            ->disableOriginalConstructor()
            ->getMock();
        $hydrator->expects($this->once())->method('get')->with('created')->willReturn($dateString);

        /** @var ResourceHydrator $hydrator */
        $model = new ResourceModel($hydrator);

        $this->assertEquals($date, $model->created());
    }

    /**
     * Test the created() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceModel::lastUpdate()
     */
    public function testLastUpdate()
    {
        $date = new \DateTime($dateString = '2010-01-28T15:00:00+02:00');

        $hydrator = $this
            ->getMockBuilder(ResourceHydrator::class)
            ->setMethods(['get'])
            ->disableOriginalConstructor()
            ->getMock();
        $hydrator->expects($this->once())->method('get')->with('last_update')->willReturn($dateString);

        /** @var ResourceHydrator $hydrator */
        $model = new ResourceModel($hydrator);

        $this->assertEquals($date, $model->lastUpdate());
    }

    /**
     * Test the content method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\ResourceModel::content()
     */
    public function testContent()
    {
        $hydrator = $this
            ->getMockBuilder(ResourceHydrator::class)
            ->setMethods(['download'])
            ->disableOriginalConstructor()
            ->getMock();
        $hydrator->expects($this->once())->method('download')->willReturn('file content');

        /** @var ResourceHydrator $hydrator */
        $model = new ResourceModel($hydrator);

        $this->assertEquals('file content', $model->content());
    }
}
