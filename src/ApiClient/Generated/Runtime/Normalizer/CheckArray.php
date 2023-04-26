<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Normalizer;

trait CheckArray
{
    public function isOnlyNumericKeys(array $array): bool
    {
        return count(array_filter($array, function ($key) {
            return is_numeric($key);
        }, ARRAY_FILTER_USE_KEY)) === count($array);
    }
}
