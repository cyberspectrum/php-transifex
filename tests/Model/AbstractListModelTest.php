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

use CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydratorInterface;
use CyberSpectrum\PhpTransifex\Model\AbstractListModel;

/**
 * This tests the AbstractListModel.
 */
class AbstractListModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test that the constructor sets the hydrator.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\AbstractListModel::__construct()
     * @covers \CyberSpectrum\PhpTransifex\Model\AbstractListModel::hydrator()
     */
    public function testAbstractListModel()
    {
        $hydrator = $this->getMockForAbstractClass(AggregateHydratorInterface::class);
        $mock     = $this->getMockForAbstractClass(AbstractListModel::class, [$hydrator]);
        /** @var AbstractListModel $mock */
        $this->assertSame($hydrator, $mock->hydrator());
    }
}
