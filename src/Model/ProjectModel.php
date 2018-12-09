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

namespace CyberSpectrum\PhpTransifex\Model;

use DateTime;

/**
 * This represents a project on transifex.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 *
 * @property Hydrator\ProjectHydrator $hydrator
 */
class ProjectModel extends AbstractModel implements DeletableModelInterface, SaveAbleModelInterface
{
    /**
     * Retrieve slug.
     *
     * @return string
     */
    public function slug()
    {
        return $this->hydrator->get('slug');
    }

    /**
     * Retrieve name.
     *
     * @return string
     */
    public function name()
    {
        return $this->hydrator->get('name');
    }

    /**
     * Set the name.
     *
     * @param string $name The new value.
     *
     * @return ProjectModel
     */
    public function setName($name)
    {
        $this->hydrator->set('name', (string) $name);

        return $this;
    }

    /**
     * Retrieve source language.
     *
     * @return string
     */
    public function sourceLanguageCode()
    {
        return $this->hydrator->get('source_language_code');
    }

    /**
     * Retrieve archived.
     *
     * @return bool
     */
    public function isArchived()
    {
        return $this->hydrator->get('archived');
    }

    /**
     * Set archived.
     *
     * @param bool $archived The new value.
     *
     * @return ProjectModel
     */
    public function setArchived($archived)
    {
        $this->hydrator->set('archived', (bool) $archived);

        return $this;
    }

    /**
     * Retrieve last updated.
     *
     * @return DateTime
     */
    public function lastUpdated()
    {
        return new DateTime($this->hydrator->get('last_updated'));
    }

    /**
     * Retrieve description.
     *
     * @return string
     */
    public function description()
    {
        return $this->hydrator->get('description');
    }

    /**
     * Set description.
     *
     * @param string $description The new value.
     *
     * @return ProjectModel
     */
    public function setDescription($description)
    {
        $this->hydrator->set('description', $description);

        return $this;
    }

    /**
     * Retrieve tags.
     *
     * @return array
     */
    public function tags()
    {
        return array_map('trim', explode(',', $this->hydrator->get('tags')));
    }

    /**
     * Set tags.
     *
     * @param array $tags The new value.
     *
     * @return ProjectModel
     */
    public function setTags($tags)
    {
        $this->hydrator->set('tags', implode(',', $tags));

        return $this;
    }

    /**
     * Retrieve translation instructions.
     *
     * @return string
     */
    public function transInstructions()
    {
        return $this->hydrator->get('trans_instructions');
    }

    /**
     * Set transInstructions.
     *
     * @param string $transInstructions The new value.
     *
     * @return ProjectModel
     */
    public function setTransInstructions($transInstructions)
    {
        $this->hydrator->set('trans_instructions', $transInstructions);

        return $this;
    }

    /**
     * Retrieve private flag.
     *
     * @return bool
     */
    public function isPrivate()
    {
        return $this->hydrator->get('private');
    }

    /**
     * Retrieve auto join flag.
     *
     * @return bool
     */
    public function isAutoJoin()
    {
        return $this->hydrator->get('auto_join');
    }

    /**
     * Set autoJoin.
     *
     * @param bool $autoJoin The new value.
     *
     * @return ProjectModel
     */
    public function setAutoJoin($autoJoin)
    {
        $this->hydrator->set('auto_join', (bool) $autoJoin);

        return $this;
    }

    /**
     * Retrieve maintainers.
     *
     * @return MaintainerModel
     */
    public function maintainers()
    {
        return new MaintainerModel($this->hydrator);
    }

    /**
     * Retrieve fill up resources.
     *
     * @return bool
     */
    public function isFillUpResources()
    {
        return $this->hydrator->get('fill_up_resources');
    }

    /**
     * Set fillUpResources.
     *
     * @param bool $fillUpResources The new value.
     *
     * @return ProjectModel
     */
    public function setFillUpResources($fillUpResources)
    {
        $this->hydrator->set('fill_up_resources', $fillUpResources);

        return $this;
    }

    /**
     * Retrieve organization name.
     *
     * @return string
     */
    public function organization()
    {
        return $this->hydrator->get('organization');
    }

    /**
     * Retrieve the list of languages.
     *
     * @return LanguageListModel
     */
    public function languages()
    {
        return new LanguageListModel($this->hydrator->languageListHydrator());
    }

    /**
     * Retrieve homepage.
     *
     * @return string
     */
    public function homepage()
    {
        return $this->hydrator->get('homepage');
    }

    /**
     * Set homepage.
     *
     * @param string $homepage The new value.
     *
     * @return ProjectModel
     */
    public function setHomepage($homepage)
    {
        $this->hydrator->set('homepage', $homepage);

        return $this;
    }

    /**
     * Retrieve long description.
     *
     * @return string
     */
    public function longDescription()
    {
        return $this->hydrator->get('long_description');
    }

    /**
     * Set long description.
     *
     * @param string $longDescription The new value.
     *
     * @return ProjectModel
     */
    public function setLongDescription($longDescription)
    {
        $this->hydrator->set('long_description', $longDescription);

        return $this;
    }

    /**
     * Retrieve a list of all resources.
     *
     * @return ResourceListModel
     */
    public function resources()
    {
        return new ResourceListModel($this->hydrator->resourceListHydrator());
    }

    /**
     * {@inheritDoc}
     */
    public function delete()
    {
        $this->hydrator->delete();
    }

    /**
     * {@inheritDoc}
     */
    public function save()
    {
        if (!$this->hydrator->exists()) {
            $this->hydrator->create();
        }

        $this->hydrator->save();
    }
}
