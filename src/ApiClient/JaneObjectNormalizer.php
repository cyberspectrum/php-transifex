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

namespace CyberSpectrum\PhpTransifex\ApiClient;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourcesResponseAttributes;

class JaneObjectNormalizer extends Generated\Normalizer\JaneObjectNormalizer
{
    /** @psalm-suppress ParamNameMismatch - jane renames from type to class and we rename it back to type. */
    public function denormalize($data, $type, $format = null, array $context = []): mixed
    {
        switch ($type) {
            case ResourcesResponseAttributes::class:
                // Ensure we have an array - sometimes it is plain null.
                if (is_array($data) && null === ($data['categories'] ?? null)) {
                    $data['categories'] = [];
                }
                break;
            default:
        }

        return parent::denormalize($data, $type, $format, $context);
    }
}
