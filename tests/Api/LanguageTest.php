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

namespace CyberSpectrum\PhpTransifex\Tests\Api;

use CyberSpectrum\PhpTransifex\Api\Language;

/**
 * This tests the language API.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class LanguageTest extends ApiTestCase
{
    /**
     * The API class to instantiate.
     *
     * @var string
     */
    public static $APICLASS = Language::class;

    /**
     * Test the all() method
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Api\Language::all()
     */
    public function testAll()
    {
        /** @var Language $api */
        $api = $this->expectGet('/api/2/project/foo%20bar/languages/');

        $api->all('foo bar');
    }

    /**
     * Test the show() method
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Api\Language::show()
     */
    public function testShow()
    {
        /** @var Language $api */
        $api = $this->expectGet('/api/2/project/foo%20bar/language/de-DE/');

        $api->show('foo bar', 'de-DE');
    }

    /**
     * Test the create() method
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Api\Language::create()
     */
    public function testCreate()
    {
        /** @var Language $api */
        $api = $this->expectPost(
            '/api/2/project/foo%20bar/languages/',
            ['language_code' => 'de-DE', 'coordinators' => ['user1']]
        );

        $api->create('foo bar', 'de-DE', ['user1']);
    }

    /**
     * Test the create() method
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Api\Language::create()
     */
    public function testCreateWithBadUserSkip()
    {
        /** @var Language $api */
        $api = $this->expectPost(
            '/api/2/project/foo%20bar/languages/?skip_invalid_username',
            ['language_code' => 'de-DE', 'coordinators' => ['user1']]
        );

        $api->create('foo bar', 'de-DE', ['user1'], [], true);
    }

    /**
     * Test the create() method
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Api\Language::create()
     */
    public function testCreateWithOptions()
    {
        /** @var Language $api */
        $api = $this->expectPost(
            '/api/2/project/foo%20bar/languages/',
            ['language_code' => 'de-DE', 'coordinators' => ['user1'], 'translators' => ['user2', 'user3']]
        );

        $api->create('foo bar', 'de-DE', ['user1'], ['translators' => ['user2', 'user3']]);
    }

    /**
     * Test the remove() method
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Api\Language::remove()
     */
    public function testRemove()
    {
        /** @var Language $api */
        $api = $this->expectDelete('/api/2/project/foo%20bar/language/de-DE/');

        $api->remove('foo bar', 'de-DE');
    }

    /**
     * Test the update() method
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Api\Language::update()
     */
    public function testUpdate()
    {
        /** @var Language $api */
        $api = $this->expectPut('/api/2/project/foo%20bar/language/de-DE/', ['coordinators' => ['user1']]);

        $api->update('foo bar', 'de-DE', ['user1']);
    }

    /**
     * Test the update() method
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Api\Language::update()
     */
    public function testUpdateWithEmptyCoordinators()
    {
        /** @var Language $api */
        $api = $this
            ->getMockBuilder(static::$APICLASS)
            ->setMethods(null)
            ->disableOriginalConstructor()
            ->getMock();

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('The coordinators array must contain at least one username.');

        $api->update('foo bar', 'de-DE', []);
    }

    /**
     * Test the update() method
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Api\Language::update()
     */
    public function testUpdateWithTranslators()
    {
        /** @var Language $api */
        $api = $this->expectPut(
            '/api/2/project/foo%20bar/language/de-DE/',
            ['coordinators' => ['user1'], 'translators' => ['user2', 'user3']]
        );

        $api->update('foo bar', 'de-DE', ['user1'], ['translators' => ['user2', 'user3']]);
    }

    /**
     * Test the update() method
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Api\Language::update()
     */
    public function testUpdateWithReviewers()
    {
        /** @var Language $api */
        $api = $this->expectPut(
            '/api/2/project/foo%20bar/language/de-DE/',
            ['coordinators' => ['user1'], 'reviewers' => ['user2', 'user3']]
        );

        $api->update('foo bar', 'de-DE', ['user1'], ['reviewers' => ['user2', 'user3']]);
    }

    /**
     * Test the coordinators() method.
     *
     * @return void
     */
    public function testCoordinators()
    {
        /** @var Language $api */
        $api = $this->expectGet('/api/2/project/foo%20bar/language/de-DE/coordinators/');

        $api->coordinators('foo bar', 'de-DE');
    }

    /**
     * Test the reviewers() method.
     *
     * @return void
     */
    public function testReviewers()
    {
        /** @var Language $api */
        $api = $this->expectGet('/api/2/project/foo%20bar/language/de-DE/reviewers/');

        $api->reviewers('foo bar', 'de-DE');
    }

    /**
     * Test the translators() method.
     *
     * @return void
     */
    public function testTranslators()
    {
        /** @var Language $api */
        $api = $this->expectGet('/api/2/project/foo%20bar/language/de-DE/translators/');

        $api->translators('foo bar', 'de-DE');
    }
}
