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
 * This class is the hydrator for translation lists of resources.
 */
class TranslationListHydrator extends AggregateHydrator
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
     * @param string $resourceSlug The resource slug.
     */
    public function __construct(Client $api, $projectSlug, $resourceSlug)
    {
        parent::__construct($api);
        $this->projectSlug  = $projectSlug;
        $this->resourceSlug = $resourceSlug;
    }

    /**
     * {@inheritDoc}
     */
    protected function createHydrator($name, array $initialData)
    {
        return new TranslationHydrator($this->api, $this->projectSlug, $this->resourceSlug, $name);
    }

    /**
     * {@inheritDoc}
     */
    protected function doLoad()
    {
        $data = $this->api->language()->all($this->projectSlug);
        foreach ($data as $language) {
            $this->doAdd($language['language_code']);
        }
    }
}
