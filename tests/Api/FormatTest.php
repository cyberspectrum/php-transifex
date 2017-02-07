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

use CyberSpectrum\PhpTransifex\Api\Format;

/**
 * This tests the format API.
 */
class FormatTest extends ApiTestCase
{
    public static $APICLASS = Format::class;

    /**
     * Test the all() method
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Api\Format::all()
     */
    public function testAll()
    {
        /** @var Format $api */
        $api = $this->expectGet('/api/2/formats');

        $api->all();
    }
}
