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
     * The translation list hydrator.
     *
     * @var TranslationListHydrator
     */
    private $translationListHydrator;

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
     * Download the contents from transifex.
     *
     * @return string
     *
     * @throws RuntimeException When the resource has not been created on transifex yet.
     */
    public function download()
    {
        if ((!$this->exists())) {
            throw new RuntimeException('Resource must be created before downloading');
        }
        return $this->api->resource()->download($this->projectSlug, $this->resourceSlug);
    }

    /**
     * Derive a translation list hydrator.
     *
     * @return TranslationListHydrator
     *
     * @throws RuntimeException When the resource does not exist yet.
     */
    public function translationListHydrator()
    {
        if (null !== $this->translationListHydrator) {
            return $this->translationListHydrator;
        }

        if (!$this->exists()) {
            throw new RuntimeException('Resource must be created before accessing the translations');
        }

        return $this->translationListHydrator = new TranslationListHydrator(
            $this->api,
            $this->projectSlug,
            $this->resourceSlug
        );
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
        if ([] !== $pending->values()) {
            $this->api->resource()->upload(
                $this->projectSlug,
                $this->resourceSlug,
                $pending->get('content')
            );
        }

        if (null !== $this->translationListHydrator) {
            $this->translationListHydrator->save();
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function doDelete()
    {
        $this->api->resource()->remove($this->projectSlug, $this->resourceSlug);
    }
}
