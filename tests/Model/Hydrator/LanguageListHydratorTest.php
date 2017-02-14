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

use CyberSpectrum\PhpTransifex\Api\Language;
use CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageHydrator;
use CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageListHydrator;

/**
 * This tests the LanguageListHydrator.
 */
class LanguageListHydratorTest extends HydratorTestCase
{
    /**
     * Test that initialization.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageListHydrator::__construct()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageListHydrator::createHydrator
     */
    public function testInitialize()
    {
        $languageApi = $this
            ->getMockBuilder(Language::class)
            ->setMethods(['all'])
            ->disableOriginalConstructor()
            ->getMock();

        $languageApi->expects($this->once())->method('all')->willReturn([]);

        $hydrator = new LanguageListHydrator(
            $this->mockClient(['language' => $languageApi]),
            'project-slug',
            ['en' => []]
        );

        $this->assertSame(['en'], $hydrator->hydrators());
        $this->assertTrue($hydrator->has('en'));
    }

    /**
     * Test that adding works.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageListHydrator::createHydrator
     */
    public function testAdd()
    {
        $languageApi = $this
            ->getMockBuilder(Language::class)
            ->setMethods(['all'])
            ->disableOriginalConstructor()
            ->getMock();

        $languageApi->expects($this->once())->method('all')->willReturn([]);

        $hydrator = new LanguageListHydrator(
            $this->mockClient(['language' => $languageApi]),
            'project-slug',
            ['en' => []]
        );

        $sub1 = $hydrator->add('en', []);

        $this->assertInstanceOf(LanguageHydrator::class, $sub1);
    }

    /**
     * Test that the load method adds all languages.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageListHydrator::doLoad
     */
    public function testLoadAddsAll()
    {
        $languageApi = $this
            ->getMockBuilder(Language::class)
            ->setMethods(['all'])
            ->disableOriginalConstructor()
            ->getMock();

        $languageApi->expects($this->once())->method('all')->willReturn(
            [
                ['language_code' => 'en']
            ]
        );

        $hydrator = new LanguageListHydrator($this->mockClient(['language' => $languageApi]), 'project-slug');

        $this->assertSame(['en'], $hydrator->hydrators());
        $this->assertTrue($hydrator->has('en'));
    }
}
