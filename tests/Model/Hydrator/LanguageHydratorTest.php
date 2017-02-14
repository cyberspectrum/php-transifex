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

/**
 * This tests the LanguageHydrator.
 */
class LanguageHydratorTest extends HydratorTestCase
{
    /**
     * Test the doLoad method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageHydrator::doLoad()
     */
    public function testDoLoad()
    {
        $languageApi = $this
            ->getMockBuilder(Language::class)
            ->disableOriginalConstructor()
            ->setMethods(['show', 'all'])
            ->getMock();
        $languageApi
            ->expects($this->once())
            ->method('show')
            ->with('project-slug', 'language-slug')
            ->willReturn(['coordinators' => ['user1'], 'reviewers' => [], 'translators' => []]);
        $languageApi
            ->expects($this->once())
            ->method('all')
            ->with('project-slug')
            ->willReturn(
                [
                    [
                        'language_code' => 'language-slug',
                        'coordinators' => ['user1'],
                        'reviewers' => [],
                        'translators' => []
                    ]
                ]
            );
        $client = $this->mockClient(['language' => $languageApi]);

        $hydrator = new LanguageHydrator($client, 'project-slug', 'language-slug', []);

        $hydrator->load();

        $this->assertSame(['user1'], $hydrator->get('coordinators'));
        $this->assertSame([], $hydrator->get('reviewers'));
        $this->assertSame([], $hydrator->get('translators'));
    }

    /**
     * Test the doLoad method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageHydrator::doLoad()
     */
    public function testDoLoadWithEmptyResult()
    {
        $languageApi = $this
            ->getMockBuilder(Language::class)
            ->disableOriginalConstructor()
            ->setMethods(['show', 'all'])
            ->getMock();
        $languageApi
            ->expects($this->never())
            ->method('show');
        $languageApi
            ->expects($this->once())
            ->method('all')
            ->with('project-slug')
            ->willReturn([]);
        $client = $this->mockClient(['language' => $languageApi]);

        $hydrator = new LanguageHydrator($client, 'project-slug', 'language-slug', []);

        $this->assertFalse($hydrator->exists());
    }

    /**
     * Test the doSave method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageHydrator::doSave()
     */
    public function testDoSave()
    {
        $languageApi = $this
            ->getMockBuilder(Language::class)
            ->disableOriginalConstructor()
            ->setMethods(['update'])
            ->getMock();
        $languageApi
            ->expects($this->once())
            ->method('update')
            ->with('project-slug', 'language-slug', ['user1'], ['coordinators' => ['user1']]);
        $client = $this->mockClient(['language' => $languageApi]);

        /** @var LanguageHydrator $hydrator */
        $hydrator = $this->getMock(LanguageHydrator::class, ['doLoad'], [$client, 'project-slug', 'language-slug']);
        $hydrator->set('coordinators', ['user1']);

        $hydrator->save();
    }

    /**
     * Test the doSave method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageHydrator::doCreate()
     */
    public function testDoCreate()
    {
        $languageApi = $this
            ->getMockBuilder(Language::class)
            ->disableOriginalConstructor()
            ->setMethods(['create'])
            ->getMock();
        $languageApi
            ->expects($this->once())
            ->method('create')
            ->with('project-slug', 'language-slug', ['user1'], ['coordinators' => ['user1']]);
        $client = $this->mockClient(['language' => $languageApi]);

        /** @var LanguageHydrator $hydrator */
        $hydrator = $this->getMock(LanguageHydrator::class, ['load'], [$client, 'project-slug', 'language-slug']);
        $hydrator->set('coordinators', ['user1']);

        $hydrator->create();
    }

    /**
     * Test the doDelete method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\LanguageHydrator::doDelete()
     */
    public function testDoDelete()
    {
        $languageApi = $this
            ->getMockBuilder(Language::class)
            ->disableOriginalConstructor()
            ->setMethods(['remove'])
            ->getMock();
        $languageApi
            ->expects($this->once())
            ->method('remove')
            ->with('project-slug', 'language-slug');
        $client = $this->mockClient(['language' => $languageApi]);

        /** @var LanguageHydrator|\PHPUnit_Framework_MockObject_MockObject $hydrator */
        $hydrator = new LanguageHydrator($client, 'project-slug', 'language-slug');

        $hydrator->delete();
    }
}
