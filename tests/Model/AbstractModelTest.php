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

use CyberSpectrum\PhpTransifex\Model\Hydrator\HydratorInterface;
use CyberSpectrum\PhpTransifex\Model\AbstractModel;
use PHPUnit\Framework\TestCase;

/**
 * This tests the AbstractModel.
 */
class AbstractModelTest extends TestCase
{
    /**
     * Test that the constructor sets the hydrator.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\AbstractModel::__construct()
     * @covers \CyberSpectrum\PhpTransifex\Model\AbstractModel::hydrator()
     */
    public function testAbstractModel()
    {
        $hydrator = $this
            ->getMockBuilder(HydratorInterface::class)
            ->getMockForAbstractClass();
        $mock     = $this
            ->getMockBuilder(AbstractModel::class)
            ->setConstructorArgs([$hydrator])
            ->getMockForAbstractClass();
        /** @var AbstractModel $mock */
        $this->assertSame($hydrator, $mock->hydrator());
    }
}
