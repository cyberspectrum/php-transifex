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

/**
 * This class hydrates a project resource.
 */
class ResourceHydrator extends AbstractHydrator
{
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
     * Create a new instance.
     *
     * @param Client $api          The API client to use.
     * @param string $projectSlug  The project slug.
     * @param string $resourceSlug The language slug.
     * @param array  $initialData  The initial data for the pending attributes.
     */
    public function __construct(Client $api, $projectSlug, $resourceSlug, array $initialData = [])
    {
        parent::__construct($api, $initialData);
        $this->projectSlug  = $projectSlug;
        $this->resourceSlug = $resourceSlug;
    }

    /**
     * {@inheritDoc}
     */
    protected function doLoad()
    {
        return $this->api->resource()->show($this->projectSlug, $this->resourceSlug, true);
    }

    /**
     * {@inheritDoc}
     */
    protected function doCreate(ValueStore $pending)
    {
        $this->api->resource()->create(
            $this->projectSlug,
            $pending->get('name'),
            $this->resourceSlug,
            $pending->get('i18n_type'),
            $pending->values()
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function doSave(ValueStore $pending)
    {
        $this->api->resource()->upload(
            $this->projectSlug,
            $this->resourceSlug,
            $pending->get('content')
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function doDelete()
    {
        $this->api->resource()->remove($this->projectSlug, $this->resourceSlug);
    }
}
