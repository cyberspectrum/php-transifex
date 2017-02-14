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

use CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageHydrator;
use CyberSpectrum\PhpTransifex\Model\LanguageModel;
use CyberSpectrum\PhpTransifex\Model\UserListModel;

/**
 * This tests the LanguageModel.
 */
class LanguageModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test the languageCode() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\LanguageModel::languageCode()
     */
    public function testLanguageCode()
    {
        $hydrator = $this
            ->getMockBuilder(LanguageHydrator::class)
            ->setMethods(['get'])
            ->disableOriginalConstructor()
            ->getMock();
        $hydrator->expects($this->once())->method('get')->with('language_code')->willReturn('en');

        /** @var LanguageHydrator $hydrator */
        $model = new LanguageModel($hydrator);
        
        $this->assertSame('en', $model->languageCode());
    }

    /**
     * Test the coordinators() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\LanguageModel::coordinators()
     */
    public function testCoordinators()
    {
        $hydrator = $this
            ->getMockBuilder(LanguageHydrator::class)
            ->setMethods([])
            ->disableOriginalConstructor()
            ->getMock();

        /** @var LanguageHydrator $hydrator */
        $model = new LanguageModel($hydrator);

        $result = $model->coordinators();
        $this->assertInstanceOf(UserListModel::class, $result);
        $this->assertSame('coordinators', $result->name());
        $this->assertSame($hydrator, $result->hydrator());
    }

    /**
     * Test the translators() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\LanguageModel::translators()
     */
    public function testTranslators()
    {
        $hydrator = $this
            ->getMockBuilder(LanguageHydrator::class)
            ->setMethods([])
            ->disableOriginalConstructor()
            ->getMock();

        /** @var LanguageHydrator $hydrator */
        $model = new LanguageModel($hydrator);

        $result = $model->translators();
        $this->assertInstanceOf(UserListModel::class, $result);
        $this->assertSame('translators', $result->name());
        $this->assertSame($hydrator, $result->hydrator());
    }

    /**
     * Test the reviewers() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\LanguageModel::reviewers()
     */
    public function testReviewers()
    {
        $hydrator = $this
            ->getMockBuilder(LanguageHydrator::class)
            ->setMethods([])
            ->disableOriginalConstructor()
            ->getMock();

        /** @var LanguageHydrator $hydrator */
        $model = new LanguageModel($hydrator);

        $result = $model->reviewers();
        $this->assertInstanceOf(UserListModel::class, $result);
        $this->assertSame('reviewers', $result->name());
        $this->assertSame($hydrator, $result->hydrator());
    }
}
