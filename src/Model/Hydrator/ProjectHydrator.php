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

use RuntimeException;

/**
 * This class hydrates a project model.
 */
class ProjectHydrator extends AbstractHydrator
{
    /**
     * The language list hydrator.
     *
     * @var LanguageListHydrator
     */
    private $languageListHydrator;

    /**
     * The resource list hydrator.
     *
     * @var ResourceListHydrator
     */
    private $resourceListHydrator;

    /**
     * Derive an language list hydrator.
     *
     * @return LanguageListHydrator
     *
     * @throws RuntimeException When the project does not exist yet.
     */
    public function languageListHydrator()
    {
        if (null !== $this->languageListHydrator) {
            return $this->languageListHydrator;
        }

        if (!$this->exists()) {
            throw new RuntimeException('Project must be created before accessing the languages');
        }

        return $this->languageListHydrator = new LanguageListHydrator($this->api, $this->get('slug'));
    }

    /**
     * Derive an language list hydrator.
     *
     * @return ResourceListHydrator
     *
     * @throws RuntimeException When the project does not exist yet.
     */
    public function resourceListHydrator()
    {
        if (null !== $this->resourceListHydrator) {
            return $this->resourceListHydrator;
        }

        if (!$this->exists()) {
            throw new RuntimeException('Project must be created before accessing the languages');
        }

        return $this->resourceListHydrator = new ResourceListHydrator($this->api, $this->get('slug'));
    }

    /**
     * {@inheritDoc}
     */
    protected function doSave(ValueStore $pending)
    {
        if ([] !== ($values = $pending->values())) {
            $this->api->project()->update($this->get('slug'), $values);
        }

        if (null !== $this->languageListHydrator) {
            $this->languageListHydrator->save();
        }
        if (null !== $this->resourceListHydrator) {
            $this->resourceListHydrator->save();
        }
    }

    /**
     * {@inheritDoc}
     */
    protected function doLoad()
    {
        return $this->api->project()->show($this->get('slug'), true);
    }

    /**
     * {@inheritDoc}
     */
    protected function doCreate(ValueStore $pending)
    {
        $this->api->project()->create($pending->values());
    }

    /**
     * {@inheritDoc}
     */
    protected function doDelete()
    {
        $this->api->project()->remove($this->get('slug'));
    }
}
