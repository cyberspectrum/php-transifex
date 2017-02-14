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

/**
 * This class represents a project language.
 */
class LanguageModel extends AbstractModel
{
    /**
     * Retrieve language code.
     *
     * @return string
     */
    public function languageCode()
    {
        return $this->hydrator->get('language_code');
    }

    /**
     * Retrieve coordinators.
     *
     * @return UserListModel
     */
    public function coordinators()
    {
        return new UserListModel($this->hydrator, 'coordinators');
    }

    /**
     * Retrieve translators.
     *
     * @return UserListModel
     */
    public function translators()
    {
        return new UserListModel($this->hydrator, 'translators');
    }

    /**
     * Retrieve reviewers.
     *
     * @return UserListModel
     */
    public function reviewers()
    {
        return new UserListModel($this->hydrator, 'reviewers');
    }
}
