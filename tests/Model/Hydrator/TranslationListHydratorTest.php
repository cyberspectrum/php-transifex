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
use CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationHydrator;
use CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationListHydrator;

/**
 * This tests the TranslationListHydrator.
 */
class TranslationListHydratorTest extends HydratorTestCase
{
    /**
     * Test that initialization.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationListHydrator::__construct()
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationListHydrator::createHydrator
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationListHydrator::doLoad
     */
    public function testInitialize()
    {
        $languageApi = $this
            ->getMockBuilder(Language::class)
            ->setMethods(['all'])
            ->disableOriginalConstructor()
            ->getMock();
        $languageApi
            ->expects($this->once())
            ->method('all')
            ->with('project-slug')
            ->willReturn([['language_code' => 'en'], ['language_code' => 'de']]);

        $hydrator = new TranslationListHydrator(
            $this->mockClient(['language' => $languageApi]),
            'project-slug',
            'resource-slug'
        );

        $this->assertSame(['en', 'de'], $hydrator->hydrators());
        $this->assertTrue($hydrator->has('en'));
        $this->assertTrue($hydrator->has('de'));
        $this->assertInstanceOf(TranslationHydrator::class, $hydrator->get('en'));
        $this->assertInstanceOf(TranslationHydrator::class, $hydrator->get('de'));
    }
}
