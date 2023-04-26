<?php

/**
 * This file is part of cyberspectrum/php-transifex.
 *
 * (c) 2017-2023 Christian Schiffler.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    PhpTransifex
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  2023 Christian Schiffler.
 * @license    https://github.com/cyberspectrum/php-transifex/blob/master/LICENSE MIT
 * @filesource
 */

declare(strict_types=1);

namespace CyberSpectrum\PhpTransifex;

use CyberSpectrum\PhpTransifex\Model\OrganizationList;

/**
 * This class is the initiator of the high level API.
 */
class PhpTransifex
{
    private OrganizationList $organizations;

    /**
     * Create a new instance.
     *
     * @param Client $client The client instance.
     */
    public function __construct(
        private readonly Client $client
    ) {
        $this->organizations = new OrganizationList($this->client);
    }

    public function organizations(): OrganizationList
    {
        return $this->organizations;
    }
}
