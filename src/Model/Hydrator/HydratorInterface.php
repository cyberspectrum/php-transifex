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
 * This interface describes a model hydrator.
 */
interface HydratorInterface
{
    /**
     * Check if the model exists in transifex.
     *
     * @return bool
     */
    public function exists();

    /**
     * Delete on transifex.
     *
     * @return void
     */
    public function delete();

    /**
     * Create the model on transifex.
     *
     * @return void
     */
    public function create();

    /**
     * Save the model to transifex.
     *
     * @return void
     */
    public function save();

    /**
     * Retrieve a key from the value store.
     *
     * @param string $key The key to retrieve.
     *
     * @return mixed
     */
    public function get($key);

    /**
     * Check if a key is in the value store.
     *
     * @param string $key The key to check.
     *
     * @return mixed
     */
    public function has($key);

    /**
     * Retrieve a key from the value store.
     *
     * @param string $key   The key to retrieve.
     *
     * @param mixed  $value The value to set.
     *
     * @return void
     */
    public function set($key, $value);

    /**
     * Retrieve the keys.
     *
     * @return array
     */
    public function keys();
}
