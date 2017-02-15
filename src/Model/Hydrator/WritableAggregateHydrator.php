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
abstract class WritableAggregateHydrator extends AggregateHydrator implements WritableAggregateHydratorInterface
{
    /**
     * The list of hydrators to be deleted.
     *
     * @var HydratorInterface[]
     */
    private $hydratorsToDelete = [];

    /**
     * Create a new instance.
     *
     * @param Client $api         The API client to use.
     * @param array  $initialData The initial data for the pending attributes.
     */
    public function __construct(Client $api, array $initialData = [])
    {
        parent::__construct($api);
        $this->api = $api;

        foreach ($initialData as $name => $data) {
            $this->add($name, $data);
        }
    }

    /**
     * {@inheritDoc}
     */
    public function save()
    {
        if (is_array($this->hydrators)) {
            foreach ($this->hydrators as $hydrator) {
                if (!$hydrator->exists()) {
                    $hydrator->create();
                    continue;
                }
                $hydrator->save();
            }
        }
        foreach ($this->hydratorsToDelete as $hydrator) {
            $hydrator->delete();
        }
    }

    /**
     * {@inheritDoc}
     */
    public function add($name, $initialData = [])
    {
        $this->load();

        return $this->doAdd($name, $initialData);
    }

    /**
     * {@inheritDoc}
     *
     * @throws RuntimeException When an unknown hydrator is to be removed.
     */
    public function remove($name)
    {
        $this->load();

        if (array_key_exists($name, $this->hydrators)) {
            $this->hydratorsToDelete[$name] = $this->hydrators[$name];
            unset($this->hydrators[$name]);

            return;
        }

        throw new RuntimeException('Hydrator ' . $name . ' is not registered.');
    }
}
