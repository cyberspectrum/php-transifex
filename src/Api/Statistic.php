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
 * Transifex API Statistics class.
 *
 * @link http://docs.transifex.com/api/statistics/
 */
class Statistic extends AbstractApi
{
    /**
     * Get statistics on a specified resource.
     *
     * @param string $project  The slug for the project to pull from.
     * @param string $resource The slug for the resource to pull from.
     * @param string $lang     An optional language code to return data only for a specified language.
     *
     * @return array
     */
    public function show($project, $resource, $lang = '')
    {
        return $this->get(
            '/api/2/project/' . rawurlencode($project) . '/resource/' . rawurlencode($resource) . '/stats/' .
            rawurlencode($lang)
        );
    }
}
