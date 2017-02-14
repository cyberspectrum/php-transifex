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
use Http\Client\Common\Exception\ClientErrorException;
use RuntimeException;

/**
 * This class is the abstract base for hydrators.
 */
abstract class AbstractHydrator implements HydratorInterface
{
    /**
     * The API client.
     *
     * @var Client
     */
    protected $api;

    /**
     * The data buffer.
     *
     * @var ValueStore
     */
    private $data;

    /**
     * Flag if the data exists on transifex.
     *
     * @var bool
     */
    private $exists;

    /**
     * The buffer of pending changes.
     *
     * @var ValueStore
     */
    private $pending;

    /**
     * Create a new instance.
     *
     * @param Client $api         The API client to use.
     * @param array  $initialData The initial data for the pending attributes.
     */
    public function __construct(Client $api, array $initialData = [])
    {
        $this->api     = $api;
        $this->pending = new ValueStore($initialData);
    }

    /**
     * {@inheritDoc}
     *
     * @throws RuntimeException When an unknown key is to be retrieved.
     */
    public function get($key)
    {
        if ($this->pending->has($key)) {
            return $this->pending->get($key);
        }

        // Load data from transifex.
        if ($this->exists() && $this->data->has($key)) {
            return $this->data->get($key);
        }

        throw new RuntimeException('Key ' . $key . ' is not set.');
    }

    /**
     * {@inheritDoc}
     */
    public function has($key)
    {
        if ($this->pending->has($key)) {
            return true;
        }

        return $this->exists() && $this->data->has($key);
    }

    /**
     * {@inheritDoc}
     */
    public function set($key, $value)
    {
        $this->pending->set($key, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function keys()
    {
        $this->exists();

        return array_merge($this->data->keys(), $this->pending->keys());
    }

    /**
     * {@inheritDoc}
     */
    public function exists()
    {
        if (isset($this->exists)) {
            return $this->exists;
        }

        $this->load();
        return $this->exists;
    }

    /**
     * {@inheritDoc}
     */
    public function delete()
    {
        $this->doDelete();
        $this->exists = false;
    }

    /**
     * {@inheritDoc}
     */
    public function create()
    {
        $this->doCreate($this->pending);

        $this->load();
    }

    /**
     * {@inheritDoc}
     */
    public function save()
    {
        $this->doSave($this->pending);

        $this->load();
    }

    /**
     * Load the data from the API.
     *
     * @return void
     *
     * @throws ClientErrorException When an server error occurred.
     */
    public function load()
    {
        try {
            if (null === ($data = $this->doLoad())) {
                $this->data   = null;
                $this->exists = false;
                return;
            }
            $this->data   = new ValueStore($data);
            $this->exists = true;
        } catch (ClientErrorException $exception) {
            $this->data   = null;
            $this->exists = false;
            if (404 === $exception->getCode()) {
                return;
            }
            // Wrap and re-throw.
            throw new ClientErrorException(
                $exception->getMessage(),
                $exception->getRequest(),
                $exception->getResponse(),
                $exception
            );
        }

        foreach ($this->pending->keys() as $key) {
            if ($this->data->has($key) && ($this->data->get($key) === $this->pending->get($key))) {
                $this->pending->remove($key);
            }
        }
    }

    /**
     * Load from transifex.
     *
     * @return array|null
     */
    abstract protected function doLoad();

    /**
     * Perform the creation.
     *
     * @param ValueStore $pending The pending changes.
     *
     * @return bool
     */
    abstract protected function doCreate(ValueStore $pending);

    /**
     * Perform the saving.
     *
     * @param ValueStore $pending The pending changes.
     *
     * @return void
     */
    abstract protected function doSave(ValueStore $pending);
    
    /**
     * Perform the deletion.
     *
     * @return bool
     */
    abstract protected function doDelete();
}
