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

use CyberSpectrum\PhpTransifex\Api\Translation;
use CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationHydrator;

/**
 * This tests the TranslationHydrator.
 */
class TranslationHydratorTest extends HydratorTestCase
{
    /**
     * Test the exists method.
     *
     * @return void
     */
    public function testExists()
    {
        $hydrator = new TranslationHydrator($this->mockClient(), 'project-slug', 'resource-slug', 'language-code');
        $this->assertTrue($hydrator->exists());
    }

    /**
     * Test that the create raises an exception.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationHydrator::create()
     */
    public function testDoCreate()
    {
        $hydrator = new TranslationHydrator($this->mockClient(), 'project-slug', 'resource-slug', 'language-slug');

        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Translations can not be created, you must add them as project languages.');

        $hydrator->create();
    }

    /**
     * Test that the delete raises an exception.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationHydrator::delete()
     */
    public function testDelete()
    {
        $hydrator = new TranslationHydrator($this->mockClient(), 'project-slug', 'resource-slug', 'language-slug');

        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Translations can not be deleted, you must remove them from project languages.');

        $hydrator->delete();
    }

    /**
     * Test the set method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationHydrator::save()
     */
    public function testSave()
    {
        $hydrator = new TranslationHydrator($this->mockClient(), 'project-slug', 'resource-slug', 'language-slug');

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Uploading of translations is not yet implemented.');

        $hydrator->save();
    }

    /**
     * Test that downloading works.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationHydrator::get()
     */
    public function testGetForUnknownKey()
    {
        $hydrator = new TranslationHydrator($this->mockClient(), 'project-slug', 'resource-slug', 'language-slug');

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Key invalid-key is not set.');

        $hydrator->get('invalid-key');
    }

    /**
     * Test that downloading works.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationHydrator::get()
     */
    public function testGet()
    {
        $translationApi = $this
            ->getMockBuilder(Translation::class)
            ->disableOriginalConstructor()
            ->setMethods(['show'])
            ->getMock();
        $translationApi
            ->expects($this->once())
            ->method('show')
            ->with('project-slug', 'resource-slug', 'language-slug', 'translator')
            ->willReturn('file-contents');
        $client = $this->mockClient(['translation' => $translationApi]);

        $hydrator = new TranslationHydrator($client, 'project-slug', 'resource-slug', 'language-slug');

        $this->assertSame('file-contents', $hydrator->get('translator'));
        // Ensure it is loaded only once.
        $this->assertSame('file-contents', $hydrator->get('translator'));
    }

    /**
     * Test the has method.
     *
     * @return void
     */
    public function testHas()
    {
        $hydrator = new TranslationHydrator($this->mockClient(), 'project-slug', 'resource-slug', 'language-slug');

        $this->assertTrue($hydrator->has('default'));
        $this->assertTrue($hydrator->has('reviewed'));
        $this->assertTrue($hydrator->has('translator'));
    }

    /**
     * Test the set method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationHydrator::set()
     */
    public function testSet()
    {
        $hydrator = new TranslationHydrator($this->mockClient(), 'project-slug', 'resource-slug', 'language-slug');

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('Uploading of translations is not yet implemented.');

        $hydrator->set('translator', 'contents');
    }

    /**
     * Test the keys method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationHydrator::keys()
     */
    public function testKeys()
    {
        $hydrator = new TranslationHydrator($this->mockClient(), 'project-slug', 'resource-slug', 'language-slug');

        $this->assertSame(['default', 'reviewed', 'translator'], $hydrator->keys());
    }
}
