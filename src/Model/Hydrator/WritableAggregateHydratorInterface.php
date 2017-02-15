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

namespace CyberSpectrum\PhpTransifex\Model\Hydrator;

/**
 * This interface describes an aggregate of hydrators that may be manipulated.
 */
interface WritableAggregateHydratorInterface extends AggregateHydratorInterface
{
    /**
     * Add an hydrator.
     *
     * @param string $name        The name of the hydrator to add.
     *
     * @param array  $initialData The initial data for the hydrator.
     *
     * @return HydratorInterface
     */
    public function add($name, $initialData = []);

    /**
     * Remove an hydrator by name.
     *
     * @param string $name The name of the hydrator to remove.
     *
     * @return void
     */
    public function remove($name);
}
