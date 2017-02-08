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
 * Transifex API Translation Strings class.
 *
 * @link http://docs.transifex.com/api/translation_strings/
 */
class TranslationString extends AbstractApi
{
    /**
     * Method to get pseudolocalization strings on a specified resource.
     *
     * @param string $project  The slug for the project to pull from.
     * @param string $resource The slug for the resource to pull from.
     *
     * @return array
     */
    public function pseudoLocalization($project, $resource)
    {
        return $this->get(
            '/api/2/project/' . rawurlencode($project) .
            '/resource/' . rawurlencode($resource) .
            '/pseudo/?pseudo_type=MIXED'
        );
    }

    /**
     * Method to get the translation strings on a specified resource.
     *
     * @param string $project  The slug for the project to pull from.
     * @param string $resource The slug for the resource to pull from.
     * @param string $lang     The language to return the translation for.
     * @param bool   $details  Flag to retrieve additional details on the strings.
     * @param array  $options  An array of additional options for the request.
     *
     * @return array
     */
    public function all($project, $resource, $lang, $details = false, array $options = [])
    {
        $parameters = $this->addOptions($options, ['key', 'context']);
        if ($details) {
            $parameters['details'] = null;
        }

        return $this->get(
            '/api/2/project/' . rawurlencode($project) . '/resource/' . rawurlencode($resource) . '/translation/' .
            rawurlencode($lang) . '/strings/',
            $parameters
        );
    }
}
