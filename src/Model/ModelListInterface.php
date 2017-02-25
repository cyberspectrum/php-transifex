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
 * This interface describes a model list.
 */
interface ModelListInterface
{
    /**
     * Retrieve a model with the passed name.
     *
     * @param string $name The model name.
     *
     * @return ModelInterface
     */
    public function get($name);

    /**
     * Check if a model is in the list.
     *
     * @param string $name The model name.
     *
     * @return bool
     */
    public function has($name);
}
