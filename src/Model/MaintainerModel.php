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

/**
 * This represents a maintainer list on a project.
 */
class MaintainerModel extends AbstractModel
{
    /**
     * Check if a maintainer exists.
     *
     * @param string $user The user name.
     *
     * @return bool
     */
    public function has($user)
    {
        return in_array($user, $this->hydrator->get('maintainers'), true);
    }

    /**
     * Retrieve the names.
     *
     * @return string[]
     */
    public function names()
    {
        return array_map(function ($user) {
            return $user['username'];
        }, $this->hydrator->get('maintainers'));
    }

    /**
     * Remove an user.
     *
     * @param string $user The user name.
     *
     * @return MaintainerModel
     */
    public function remove($user)
    {
        $this->hydrator->set(
            'maintainers',
            array_filter($this->hydrator->get('maintainers'), function ($candidate) use ($user) {
                return ($user !== $candidate['username']);
            })
        );

        return $this;
    }
}
