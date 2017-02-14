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

use RuntimeException;

/**
 * This class is the value store for hydrators.
 */
class ValueStore
{
    /**
     * The values.
     *
     * @var array
     */
    private $data;

    /**
     * Create a new instance.
     *
     * @param array $initialData The initial data.
     */
    public function __construct(array $initialData = [])
    {
        $this->data = $initialData;
    }

    /**
     * Retrieve a key from the value store.
     *
     * @param string $key The key to retrieve.
     *
     * @return mixed
     *
     * @throws RuntimeException When an unknown key is to be retrieved.
     */
    public function get($key)
    {
        if (array_key_exists($key, $this->data)) {
            return $this->data[$key];
        }

        throw new RuntimeException('Key ' . $key . ' is not set.');
    }

    /**
     * Check if a key is in the value store.
     *
     * @param string $key The key to check.
     *
     * @return bool
     */
    public function has($key)
    {
        if (array_key_exists($key, $this->data)) {
            return true;
        }

        return false;
    }

    /**
     * Retrieve a key from the value store.
     *
     * @param string $key   The key to retrieve.
     *
     * @param mixed  $value The value to set.
     *
     * @return void
     */
    public function set($key, $value)
    {
        $this->data[$key] = $value;
    }

    /**
     * Check if a key is in the value store.
     *
     * @param string $key The key to check.
     *
     * @return void
     *
     * @throws RuntimeException When an unknown key is to be removed.
     */
    public function remove($key)
    {
        if (array_key_exists($key, $this->data)) {
            unset($this->data[$key]);

            return;
        }

        throw new RuntimeException('Key ' . $key . ' is not set.');
    }


    /**
     * Retrieve the keys.
     *
     * @return array
     */
    public function keys()
    {
        return array_keys($this->data);
    }

    /**
     * Set all values.
     *
     * @param array $data The new data.
     *
     * @return void
     */
    public function setValues(array $data)
    {
        $this->data = $data;
    }

    /**
     * Retrieve all values.
     *
     * @return array
     */
    public function values()
    {
        return $this->data;
    }
}
