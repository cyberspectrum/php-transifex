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
 * This class hydrates a language list.
 */
class LanguageListHydrator extends AggregateHydrator
{
    /**
     * The project slug.
     *
     * @var string
     */
    private $projectSlug;

    /**
     * {@inheritDoc}
     *
     * @param Client $api         The API client to use.
     * @param string $projectSlug The project slug.
     * @param array  $initialData The initial data for the pending attributes.
     */
    public function __construct(Client $api, $projectSlug, array $initialData = [])
    {
        parent::__construct($api, $initialData);
        $this->projectSlug = $projectSlug;
    }

    /**
     * {@inheritDoc}
     */
    protected function createHydrator($name, array $initialData)
    {
        return new LanguageHydrator($this->api, $this->projectSlug, $name, $initialData);
    }

    /**
     * {@inheritDoc}
     */
    protected function doLoad()
    {
        $data = $this->api->language()->all($this->projectSlug);
        foreach ($data as $language) {
            $this->add($language['language_code']);
        }
    }
}
