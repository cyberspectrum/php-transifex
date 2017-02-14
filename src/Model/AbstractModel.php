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

use CyberSpectrum\PhpTransifex\Model\Hydrator\HydratorInterface;

/**
 * This class is the abstract base for models.
 */
abstract class AbstractModel implements ModelInterface
{
    /**
     * Hydrator class.
     *
     * @var HydratorInterface
     */
    protected $hydrator;

    /**
     * Create a new instance.
     *
     * @param HydratorInterface $hydrator The hydrator to use.
     */
    public function __construct(HydratorInterface $hydrator)
    {
        $this->hydrator = $hydrator;
    }

    /**
     * Retrieve the hydrator.
     *
     * @return HydratorInterface
     */
    public function hydrator()
    {
        return $this->hydrator;
    }
}
