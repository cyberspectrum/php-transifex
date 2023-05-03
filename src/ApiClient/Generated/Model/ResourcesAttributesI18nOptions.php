<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class ResourcesAttributesI18nOptions extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * If true, identical strings found in the resource will be parsed as separate strings; otherwise, identical strings will be considered as instances of the same string. Available in "HTML" i18n type resources.
     *
     * @var bool
     */
    protected $allowDuplicateStrings;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * If true, identical strings found in the resource will be parsed as separate strings; otherwise, identical strings will be considered as instances of the same string. Available in "HTML" i18n type resources.
     */
    public function getAllowDuplicateStrings(): bool
    {
        return $this->allowDuplicateStrings;
    }

    /**
     * If true, identical strings found in the resource will be parsed as separate strings; otherwise, identical strings will be considered as instances of the same string. Available in "HTML" i18n type resources.
     */
    public function setAllowDuplicateStrings(bool $allowDuplicateStrings): self
    {
        $this->initialized['allowDuplicateStrings'] = true;
        $this->allowDuplicateStrings = $allowDuplicateStrings;

        return $this;
    }
}
