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
 * This class represents a resource translation.
 *
 * @property Hydrator\TranslationHydrator $hydrator
 */
class TranslationModel extends AbstractModel
{
    /**
     * Fetch the contents.
     *
     * @param string $mode The desired translation download mode (one of: default, reviewed, translator).
     *
     * @return string
     */
    public function contents($mode = 'default')
    {
        return $this->hydrator->get($mode);
    }

    /**
     * Retrieve the statistic for this language.
     *
     * @return StatisticModel
     */
    public function statistic()
    {
        return new StatisticModel($this->hydrator->statisticHydrator());
    }
}
