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

use CyberSpectrum\PhpTransifex\Model\Hydrator\AggregateHydratorInterface;
use IteratorAggregate;

/**
 * This class is the abstract base for list models.
 */
abstract class AbstractListModel implements ModelInterface, ModelListInterface, IteratorAggregate
{
    /**
     * Hydrator class.
     *
     * @var AggregateHydratorInterface
     */
    protected $hydrator;

    /**
     * Create a new instance.
     *
     * @param AggregateHydratorInterface $hydrator The hydrator to use.
     */
    public function __construct(AggregateHydratorInterface $hydrator)
    {
        $this->hydrator = $hydrator;
    }

    /**
     * Retrieve the hydrator.
     *
     * @return AggregateHydratorInterface
     */
    public function hydrator()
    {
        return $this->hydrator;
    }

    /**
     * Retrieve the iterator.
     *
     * @return ModelListIterator
     */
    public function getIterator()
    {
        return new ModelListIterator($this, $this->hydrator->hydrators());
    }
}
