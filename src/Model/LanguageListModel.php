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

use InvalidArgumentException;
use OutOfBoundsException;

/**
 * This class wraps the language list.
 *
 * @property Hydrator\LanguageListHydrator $hydrator
 */
class LanguageListModel extends AbstractListModel
{
    /**
     * Retrieve a language.
     *
     * @param string $langCode The language code.
     *
     * @return LanguageModel
     *
     * @throws OutOfBoundsException When the requested language is not in the list.
     */
    public function get($langCode)
    {
        if (!($this->has($langCode))) {
            throw new OutOfBoundsException('Language not in list: ' . $langCode);
        }

        return new LanguageModel($this->hydrator->get($langCode));
    }

    /**
     * Check if a resource is in the list.
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
     * Add a new translation.
     *
     * @param string $langCode The language code.
     *
     * @return LanguageModel
     *
     * @throws InvalidArgumentException When the resource is already in the list.
     */
    public function add($langCode)
    {
        if ($this->has($langCode)) {
            throw new InvalidArgumentException('Language already in list: ' . $langCode);
        }

        return new LanguageModel($this->hydrator->add($langCode, ['coordinators' => []]));
    }

    /**
     * Remove a language.
     *
     * @param string $langCode The language code.
     *
     * @return void
     *
     * @throws InvalidArgumentException When the language is not in the list.
     */
    public function remove($langCode)
    {
        if (!$this->has($langCode)) {
            throw new InvalidArgumentException('Language not in list: ' . $langCode);
        }

        $this->hydrator->remove($langCode);
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
