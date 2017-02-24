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

use OutOfBoundsException;

/**
 * This class wraps the translation list.
 */
class TranslationListModel extends AbstractListModel
{
    /**
     * Retrieve a translation.
     *
     * @param string $langCode The language code.
     *
     * @return TranslationModel
     *
     * @throws OutOfBoundsException When the requested language is not in the list.
     */
    public function get($langCode)
    {
        if (!($this->has($langCode))) {
            throw new OutOfBoundsException('Language not in list: ' . $langCode);
        }

        return new TranslationModel($this->hydrator->get($langCode));
    }

    /**
     * Check if a translation is in the list.
     *
     * @param string $langCode The lang code.
     *
     * @return bool
     */
    public function has($langCode)
    {
        return $this->hydrator->has($langCode);
    }

    /**
     * Retrieve the language codes.
     *
     * @return string[]
     */
    public function codes()
    {
        return $this->hydrator->hydrators();
    }
}
