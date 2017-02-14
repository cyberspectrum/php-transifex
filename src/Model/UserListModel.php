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

namespace CyberSpectrum\PhpTransifex\Model;

use CyberSpectrum\PhpTransifex\Model\Hydrator\HydratorInterface;
use InvalidArgumentException;

/**
 * This represents a user list.
 */
class UserListModel extends AbstractModel
{
    /**
     * The name of the list.
     *
     * @var string
     */
    private $name;

    /**
     * Create a new instance.
     *
     * @param HydratorInterface $hydrator The hydrator to use.
     *
     * @param string            $name     The list key.
     */
    public function __construct(HydratorInterface $hydrator, $name)
    {
        parent::__construct($hydrator);

        $this->name = $name;
    }

    /**
     * Check if an user is in the list.
     *
     * @param string $user The user name.
     *
     * @return bool
     */
    public function has($user)
    {
        return in_array($user, $this->names());
    }

    /**
     * Retrieve the names.
     *
     * @return string[]
     */
    public function names()
    {
        return $this->hydrator->get($this->name);
    }

    /**
     * Add an user.
     *
     * @param string $user The user name.
     *
     * @return UserListModel
     *
     * @throws InvalidArgumentException When the user is already in the list.
     */
    public function add($user)
    {
        if ($this->has($user)) {
            throw new InvalidArgumentException('User already in list: ' . $user);
        }

        $names   = $this->names();
        $names[] = $user;

        $this->hydrator->set($this->name, $names);

        return $this;
    }

    /**
     * Remove an user.
     *
     * @param string $user The user name.
     *
     * @return UserListModel
     *
     * @throws InvalidArgumentException When the user is not in the list.
     */
    public function remove($user)
    {
        if (!$this->has($user)) {
            throw new InvalidArgumentException('User not in list: ' . $user);
        }

        $this->hydrator->set(
            $this->name,
            array_values(array_filter($this->hydrator->get($this->name), function ($candidate) use ($user) {
                return ($user !== $candidate);
            }))
        );

        return $this;
    }

    /**
     * Return the name of the list.
     *
     * @return string
     */
    public function name()
    {
        return $this->name;
    }
}
