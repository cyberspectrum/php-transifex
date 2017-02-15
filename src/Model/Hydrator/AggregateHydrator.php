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

use CyberSpectrum\PhpTransifex\Client;
use RuntimeException;

/**
 * This class is the abstract base for aggregate hydrators.
 */
abstract class AggregateHydrator implements AggregateHydratorInterface
{
    /**
     * The API client.
     *
     * @var Client
     */
    protected $api;

    /**
     * The list of hydrators.
     *
     * @var HydratorInterface[]
     */
    protected $hydrators;

    /**
     * Create a new instance.
     *
     * @param Client $api The API client to use.
     */
    public function __construct(Client $api)
    {
        $this->api = $api;
    }

    /**
     * {@inheritDoc}
     */
    public function save()
    {
        if (is_array($this->hydrators)) {
            foreach ($this->hydrators as $hydrator) {
                $hydrator->save();
            }
        }
    }

    /**
     * {@inheritDoc}
     */
    public function hydrators()
    {
        $this->load();

        return array_keys($this->hydrators);
    }

    /**
     * {@inheritDoc}
     */
    public function has($name)
    {
        $this->load();

        return array_key_exists($name, $this->hydrators);
    }

    /**
     * {@inheritDoc}
     *
     * @throws RuntimeException When an unknown hydrator is to be retrieved.
     */
    public function get($name)
    {
        $this->load();

        if (array_key_exists($name, $this->hydrators)) {
            return $this->hydrators[$name];
        }

        throw new RuntimeException('Hydrator ' . $name . ' is not registered.');
    }

    /**
     * Add an hydrator to the list and return it.
     *
     * @param string $name        The name of the hydrator to add.
     *
     * @param array  $initialData The initial data for the hydrator.
     *
     * @return HydratorInterface
     */
    protected function doAdd($name, $initialData = [])
    {
        return $this->hydrators[$name] = $this->createHydrator($name, $initialData);
    }

    /**
     * Load the data from transifex.
     *
     * @return void
     */
    final protected function load()
    {
        if (null === $this->hydrators) {
            $this->hydrators = [];
            $this->doLoad();
        }
    }

    /**
     * Create an hydrator with the given name.
     *
     * @param string $name        The hydrator name.
     *
     * @param array  $initialData The initial data.
     *
     * @return HydratorInterface
     */
    abstract protected function createHydrator($name, array $initialData);

    /**
     * Load the data from transifex.
     *
     * @return void
     */
    abstract protected function doLoad();
}
