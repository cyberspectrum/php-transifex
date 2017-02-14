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
 * This class represents a project language.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
class ResourceModel extends AbstractModel
{
    /**
     * Retrieve the name.
     *
     * @return string
     */
    public function name()
    {
        return $this->hydrator->get('name');
    }

    /**
     * Retrieve the slug.
     *
     * @return string
     */
    public function slug()
    {
        return $this->hydrator->get('slug');
    }

    /**
     * The language code of the source language.
     *
     * @return string
     */
    public function sourceLanguageCode()
    {
        return $this->hydrator->get('source_language_code');
    }

    /**
     * The internationalization type.
     *
     * @return string
     */
    public function i18nType()
    {
        return $this->hydrator->get('i18n_type');
    }

    /**
     * The categories.
     *
     * @return string
     */
    public function categories()
    {
        return $this->hydrator->get('categories');
    }

    /**
     * The priority.
     *
     * @return int
     */
    public function priority()
    {
        return $this->hydrator->get('priority');
    }

    /**
     * The content.
     *
     * @return string
     */
    public function content()
    {
        return $this->hydrator->download();
    }

    /**
     * Creation date (read only).
     *
     * @return DateTime
     */
    public function created()
    {
        return new DateTime($this->hydrator->get('created'));
    }

    /**
     * List of available languages (read only).
     *
     * @return string[]
     */
    public function availableLanguages()
    {
        return $this->hydrator->get('available_languages');
    }

    /**
     * Amount of words contained in this resource (read only).
     *
     * @return int
     */
    public function wordcount()
    {
        return $this->hydrator->get('wordcount');
    }

    /**
     * Amount of total entities (read only).
     *
     * @return int
     */
    public function totalEntities()
    {
        return $this->hydrator->get('total_entities');
    }

    /**
     * Flag if this resource accepts translations (read only).
     *
     * @return bool
     */
    public function acceptTranslations()
    {
        return $this->hydrator->get('accept_translations');
    }

    /**
     * Date when this resource has last been updated (read only).
     *
     * @return DateTime
     */
    public function lastUpdate()
    {
        return new DateTime($this->hydrator->get('last_update'));
    }
}
