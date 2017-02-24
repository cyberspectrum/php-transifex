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
 * This class wraps the resource list.
 */
class ResourceListModel extends AbstractListModel
{
    /**
     * Retrieve a language.
     *
     * @param string $name The name.
     *
     * @return ResourceModel
     *
     * @throws OutOfBoundsException When the requested resource is not in the list.
     */
    public function get($name)
    {
        if (!($this->has($name))) {
            throw new OutOfBoundsException('Resource not in list: ' . $name);
        }

        return new ResourceModel($this->hydrator->get($name));
    }

    /**
     * Check if a resource is in the list.
     *
     * @param string $name The name.
     *
     * @return bool
     */
    public function has($name)
    {
        return $this->hydrator->has($name);
    }

    /**
     * Add a new resource.
     *
     * @param string $slug     The resource slug.
     * @param string $name     The name.
     * @param string $i18nType The internationalization type.
     *
     * @return ResourceModel
     *
     * @throws InvalidArgumentException When the resource is already in the list.
     */
    public function add($slug, $name, $i18nType)
    {
        if ($this->has($slug)) {
            throw new InvalidArgumentException('Resource already in list: ' . $slug);
        }

        return new ResourceModel($this->hydrator->add($slug, ['name' => $name, 'i18n_type' => $i18nType]));
    }

    /**
     * Remove a resource.
     *
     * @param string $langCode The name.
     *
     * @return void
     *
     * @throws InvalidArgumentException When the resource is not in the list.
     */
    public function remove($langCode)
    {
        if (!$this->has($langCode)) {
            throw new InvalidArgumentException('Resource not in list: ' . $langCode);
        }

        $this->hydrator->remove($langCode);
    }

    /**
     * Retrieve the names.
     *
     * @return string[]
     */
    public function names()
    {
        return $this->hydrator->hydrators();
    }
}
