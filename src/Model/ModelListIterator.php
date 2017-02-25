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

use Iterator;

/**
 * This iterates over a list model.
 */
class ModelListIterator implements Iterator
{
    /**
     * The cursor.
     *
     * @var int
     */
    private $cursor;

    /**
     * The model list to iterate over.
     *
     * @var ModelListInterface
     */
    private $listModel;

    /**
     * The list of names.
     *
     * @var string[]
     */
    private $names;

    /**
     * Create a new instance.
     *
     * @param ModelListInterface $listModel The list model.
     * @param string[]           $names     The names of the sub models.
     */
    public function __construct(ModelListInterface $listModel, $names)
    {
        $this->listModel = $listModel;
        $this->names     = $names;
    }

    /**
     * {@inheritDoc}
     */
    public function current()
    {
        return $this->listModel->get($this->key());
    }

    /**
     * {@inheritDoc}
     */
    public function next()
    {
        $this->cursor++;
    }

    /**
     * {@inheritDoc}
     */
    public function key()
    {
        return $this->names[$this->cursor];
    }

    /**
     * {@inheritDoc}
     */
    public function valid()
    {
        return isset($this->names[$this->cursor]);
    }

    /**
     * {@inheritDoc}
     */
    public function rewind()
    {
        $this->cursor = 0;
    }
}
