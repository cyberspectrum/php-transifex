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
 * This class hydrates a translation.
 */
class TranslationHydrator implements HydratorInterface
{
    /**
     * The API client.
     *
     * @var Client
     */
    protected $api;

    /**
     * The project slug.
     *
     * @var string
     */
    private $projectSlug;

    /**
     * The resource slug.
     *
     * @var string
     */
    private $resourceSlug;

    /**
     * The language code.
     *
     * @var string
     */
    private $languageCode;

    /**
     * The data buffer.
     *
     * @var ValueStore
     */
    private $data;

    /**
     * The statistic hydrator.
     *
     * @var StatisticHydrator
     */
    private $statisticHydrator;

    /**
     * Create a new instance.
     *
     * @param Client $api          The API client to use.
     * @param string $projectSlug  The project slug.
     * @param string $resourceSlug The resource slug.
     * @param string $languageCode The language code.
     */
    public function __construct(Client $api, $projectSlug, $resourceSlug, $languageCode)
    {
        $this->api          = $api;
        $this->projectSlug  = $projectSlug;
        $this->resourceSlug = $resourceSlug;
        $this->languageCode = $languageCode;
        $this->data         = new ValueStore();
    }

    /**
     * {@inheritDoc}
     */
    public function exists()
    {
        return true;
    }

    /**
     * {@inheritDoc}
     *
     * @throws \LogicException Translations can not be deleted via this API but only via the project API.
     */
    public function delete()
    {
        throw new \LogicException('Translations can not be deleted, you must remove them from project languages.');
    }

    /**
     * {@inheritDoc}
     *
     * @throws \LogicException Translations can not be created via this API but only via the project API.
     */
    public function create()
    {
        throw new \LogicException('Translations can not be created, you must add them as project languages.');
    }

    /**
     * {@inheritDoc}
     *
     * @throws RuntimeException Not implemented yet.
     */
    public function save()
    {
        throw new RuntimeException('Uploading of translations is not yet implemented.');
    }

    /**
     * {@inheritDoc}
     *
     * @throws RuntimeException When an unknown key is to be retrieved.
     */
    public function get($key)
    {
        if (!$this->has($key)) {
            throw new RuntimeException('Key ' . $key . ' is not set.');
        }

        // Load data from transifex.
        if (!$this->data->has($key)) {
            $this->data->set(
                $key,
                $this->api->translation()->show($this->projectSlug, $this->resourceSlug, $this->languageCode, $key)
            );
        }

        return $this->data->get($key);
    }

    /**
     * {@inheritDoc}
     */
    public function has($key)
    {
        return in_array($key, ['default', 'reviewed', 'translator']);
    }

    /**
     * {@inheritDoc}
     *
     * @throws RuntimeException Not implemented yet.
     */
    public function set($key, $value)
    {
        throw new RuntimeException('Uploading of translations is not yet implemented.');
    }

    /**
     * Retrieve the keys.
     *
     * @return array
     */
    public function keys()
    {
        return ['default', 'reviewed', 'translator'];
    }

    /**
     * Obtain the language statistic.
     *
     * @return StatisticHydrator
     */
    public function statisticHydrator()
    {
        if (null !== $this->statisticHydrator) {
            return $this->statisticHydrator;
        }

        return $this->statisticHydrator = new StatisticHydrator(
            $this->api,
            $this->projectSlug,
            $this->resourceSlug,
            $this->languageCode
        );
    }
}
