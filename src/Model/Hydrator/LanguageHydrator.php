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
 * This class hydrates a project model.
 */
class LanguageHydrator extends AbstractHydrator
{
    /**
     * The project slug.
     *
     * @var string
     */
    private $projectSlug;

    /**
     * The language slug.
     *
     * @var string
     */
    private $languageSlug;

    /**
     * Create a new instance.
     *
     * @param Client $api          The API client to use.
     * @param string $projectSlug  The project slug.
     * @param string $languageSlug The language slug.
     * @param array  $initialData  The initial data for the pending attributes.
     */
    public function __construct(Client $api, $projectSlug, $languageSlug, array $initialData = [])
    {
        parent::__construct($api, $initialData);
        $this->projectSlug  = $projectSlug;
        $this->languageSlug = $languageSlug;
    }

    /**
     * {@inheritDoc}
     */
    protected function doLoad()
    {
        $all = $this->api->language()->all($this->projectSlug);
        foreach ($all as $language) {
            if ($this->languageSlug === $language['language_code']) {
                return $this->api->language()->show($this->projectSlug, $this->languageSlug);
            }
        }
        return null;
    }

    /**
     * {@inheritDoc}
     */
    protected function doCreate(ValueStore $pending)
    {
        $this->api->language()->create(
            $this->projectSlug,
            $this->languageSlug,
            $pending->get('coordinators'),
            $pending->values()
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function doSave(ValueStore $pending)
    {
        $this->api->language()->update(
            $this->projectSlug,
            $this->languageSlug,
            $pending->get('coordinators'),
            $pending->values()
        );
    }

    /**
     * {@inheritDoc}
     */
    protected function doDelete()
    {
        $this->api->language()->remove($this->projectSlug, $this->languageSlug);
    }
}
