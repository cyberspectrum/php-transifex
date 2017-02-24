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
 * This class hydrates a statistic.
 */
class StatisticHydrator extends AbstractHydrator
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
     * The language code.
     *
     * @var string
     */
    private $languageCode;

    /**
     * Create a new instance.
     *
     * @param Client $api          The API client to use.
     * @param string $projectSlug  The project slug.
     * @param string $resourceSlug The language slug.
     * @param string $languageCode The language code.
     */
    public function __construct(Client $api, $projectSlug, $resourceSlug, $languageCode)
    {
        parent::__construct($api);
        $this->projectSlug  = $projectSlug;
        $this->resourceSlug = $resourceSlug;
        $this->languageCode = $languageCode;
    }

    /**
     * {@inheritDoc}
     */
    protected function doLoad()
    {
        return $this->api->statistic()->show($this->projectSlug, $this->resourceSlug, $this->languageCode);
    }

    /**
     * {@inheritDoc}
     *
     * @throws RuntimeException Statistics can not be manipulated.
     */
    protected function doCreate(ValueStore $pending)
    {
        throw new RuntimeException('Statistics are read only.');
    }

    /**
     * {@inheritDoc}
     *
     * @throws RuntimeException Statistics can not be manipulated.
     */
    protected function doSave(ValueStore $pending)
    {
        throw new RuntimeException('Statistics are read only.');
    }

    /**
     * {@inheritDoc}
     *
     * @throws RuntimeException Statistics can not be manipulated.
     */
    protected function doDelete()
    {
        throw new RuntimeException('Statistics are read only.');
    }
}
