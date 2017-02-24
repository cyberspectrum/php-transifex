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
 * This class represents a language statistic.
 */
class StatisticModel extends AbstractModel
{
    /**
     * The percentage of the resource that has been translated.
     *
     * @return string
     */
    public function completed()
    {
        return $this->hydrator->get('completed');
    }

    /**
     * The number of entities that have been translated for the language.
     *
     * @return int
     */
    public function translatedEntities()
    {
        return $this->hydrator->get('translated_entities');
    }

    /**
     * The number of entities that have not been translated for the language.
     *
     * @return int
     */
    public function untranslatedEntities()
    {
        return $this->hydrator->get('untranslated_entities');
    }

    /**
     * The number of words that have been translated for the language.
     *
     * @return int
     */
    public function translatedWords()
    {
        return $this->hydrator->get('translated_words');
    }

    /**
     * The number of words that have not been translated for the language.
     *
     * @return int
     */
    public function untranslatedWords()
    {
        return $this->hydrator->get('untranslated_words');
    }

    /**
     * The date and time that the last update for this translation took place.
     *
     * @return DateTime
     */
    public function lastUpdate()
    {
        return new DateTime($this->hydrator->get('last_update'));
    }

    /**
     * The username of the last user to have updated the translation for the language.
     *
     * @return string
     */
    public function lastCommitter()
    {
        return $this->hydrator->get('last_committer');
    }

    /**
     * The number of entities which have been reviewed for the language.
     *
     * @return int
     */
    public function reviewed()
    {
        return $this->hydrator->get('reviewed');
    }

    /**
     * The percentage of entities that have been reviewed for the language.
     *
     * @return string
     */
    public function reviewedPercentage()
    {
        return $this->hydrator->get('reviewed_percentage');
    }
}
