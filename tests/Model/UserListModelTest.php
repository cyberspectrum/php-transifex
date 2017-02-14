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
use CyberSpectrum\PhpTransifex\Model\UserListModel;

/**
 * This tests the UserListModel.
 */
class UserListModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test that the constructor sets the hydrator.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\UserListModel::__construct()
     */
    public function testConstructor()
    {
        $hydrator = $this->getMockForAbstractClass(HydratorInterface::class);
        $model    = new UserListModel($hydrator, 'test');

        $this->assertSame($hydrator, $model->hydrator());
        $this->assertSame('test', $model->name());
    }

    /**
     * Test the has() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\UserListModel::has()
     */
    public function testHas()
    {
        $hydrator = $this->getMockForAbstractClass(HydratorInterface::class);
        $hydrator
            ->expects($this->exactly(2))
            ->method('get')
            ->with('name')
            ->willReturn(['user1']);

        $model = new UserListModel($hydrator, 'name');

        $this->assertTrue($model->has('user1'));
        $this->assertFalse($model->has('user2'));
    }

    /**
     * Test the names() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\UserListModel::names()
     */
    public function testNames()
    {
        $hydrator = $this->getMockForAbstractClass(HydratorInterface::class);
        $hydrator
            ->expects($this->once())
            ->method('get')
            ->with('name')
            ->willReturn(['user1']);

        $model = new UserListModel($hydrator, 'name');

        $this->assertSame(['user1'], $model->names());
    }

    /**
     * Test the add() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\UserListModel::add()
     */
    public function testAdd()
    {
        $hydrator = $this->getMockForAbstractClass(HydratorInterface::class);
        $hydrator
            ->expects($this->exactly(2))
            ->method('get')
            ->with('name')
            ->willReturn(['user1', 'user2', 'user3']);
        $hydrator
            ->expects($this->once())
            ->method('set')
            ->with('name', ['user1', 'user2', 'user3', 'user4']);

        $model = new UserListModel($hydrator, 'name');

        $this->assertSame($model, $model->add('user4'));
    }

    /**
     * Test the add() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\UserListModel::add()
     */
    public function testAddAlreadyExisting()
    {
        $hydrator = $this->getMockForAbstractClass(HydratorInterface::class);
        $hydrator
            ->expects($this->once())
            ->method('get')
            ->with('name')
            ->willReturn(['user1', 'user2', 'user3']);

        $model = new UserListModel($hydrator, 'name');

        $this->setExpectedException('InvalidArgumentException', 'User already in list: user1');

        $model->add('user1');
    }

    /**
     * Test the remove() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\UserListModel::remove()
     */
    public function testRemove()
    {
        $hydrator = $this->getMockForAbstractClass(HydratorInterface::class);
        $hydrator
            ->expects($this->exactly(2))
            ->method('get')
            ->with('name')
            ->willReturn(['user1', 'user2', 'user3']);
        $hydrator
            ->expects($this->once())
            ->method('set')
            ->with('name', ['user2', 'user3']);

        $model = new UserListModel($hydrator, 'name');

        $this->assertSame($model, $model->remove('user1'));
    }

    /**
     * Test the remove() method.
     *
     * @return void
     *
     * @covers \CyberSpectrum\PhpTransifex\Model\UserListModel::remove()
     */
    public function testRemoveUnknown()
    {
        $hydrator = $this->getMockForAbstractClass(HydratorInterface::class);
        $hydrator
            ->expects($this->once())
            ->method('get')
            ->with('name')
            ->willReturn(['user1', 'user2', 'user3']);

        $model = new UserListModel($hydrator, 'name');

        $this->setExpectedException('InvalidArgumentException', 'User not in list: user4');

        $model->remove('user4');
    }

    /**
     * Test the name() method.
     *
     * @return void
     */
    public function testName()
    {
        $hydrator = $this->getMockForAbstractClass(HydratorInterface::class);

        $model = new UserListModel($hydrator, 'name');
        $this->assertSame('name', $model->name());
    }
}
