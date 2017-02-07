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

namespace CyberSpectrum\PhpTransifex\Api;

/**
 * Transifex API Language Information class.
 *
 * @link http://docs.transifex.com/api/language_info/
 */
class Languageinfo extends AbstractApi
{
    /**
     * Get data on the specified language.
     *
     * @param string $lang The language code to retrieve.
     *
     * @return array
     */
    public function getLanguage($lang)
    {
        return $this->get('/api/2/language/' . rawurlencode($lang) . '/');
    }
    /**
     * Get data on all supported API languages.
     *
     * @return array
     */
    public function getLanguages()
    {
        return $this->get('/api/2/languages/');
    }
}
