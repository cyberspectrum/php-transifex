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

use CyberSpectrum\PhpTransifex\Model\Hydrator\TranslationHydrator;
use CyberSpectrum\PhpTransifex\Model\TranslationModel;

/**
 * This tests the TranslationModel.
 */
class TranslationModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Provide data for the contents method.
     *
     * @return array
     */
    public function contentsProvider()
    {
        return [
            'Test that default gets returned' => ['file-contents', 'default'],
            'Test that reviewed gets returned' => ['file-contents', 'reviewed'],
            'Test that translator gets returned' => ['file-contents', 'translator'],
        ];
    }

    /**
     * Test the contents method.
     *
     * @param string $expected The expected result.
     * @param string $mode     The mode to retrieve.
     *
     * @return void
     *
     * @dataProvider contentsProvider()
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\TranslationModel::contents()
     */
    public function testContents($expected, $mode)
    {
        $hydrator = $this
            ->getMockBuilder(TranslationHydrator::class)
            ->setMethods(['get'])
            ->disableOriginalConstructor()
            ->getMock();
        $hydrator->expects($this->once())->method('get')->with($mode)->willReturn($expected);

        /** @var TranslationHydrator $hydrator */
        $model = new TranslationModel($hydrator);

        $this->assertSame($expected, $model->contents($mode));
    }
}
