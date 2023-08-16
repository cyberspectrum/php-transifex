<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use DateTimeInterface;

class GetResourceStringsRevisions200ResponseDataItemsAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var DateTimeInterface
     */
    protected $dateCreated;
    /**
     * Dictionary with the translation content.
     * For pluralized resource strings, the keys should be all the
     * available plural rules for source language, as defined in CLDR,
     * and the values the actual content for each plural rule.
     *
     * For non-pluralized resource strings, only the default plural rule
     * ('other') is required.
     *
     * @var ResourceStringsAttributesStrings
     */
    protected $strings;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getDateCreated(): DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(DateTimeInterface $dateCreated): self
    {
        $this->initialized['dateCreated'] = true;
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Dictionary with the translation content.
     * For pluralized resource strings, the keys should be all the
     * available plural rules for source language, as defined in CLDR,
     * and the values the actual content for each plural rule.
     *
     * For non-pluralized resource strings, only the default plural rule
     * ('other') is required.
     */
    public function getStrings(): ResourceStringsAttributesStrings
    {
        return $this->strings;
    }

    /**
     * Dictionary with the translation content.
     * For pluralized resource strings, the keys should be all the
     * available plural rules for source language, as defined in CLDR,
     * and the values the actual content for each plural rule.
     *
     * For non-pluralized resource strings, only the default plural rule
     * ('other') is required.
     */
    public function setStrings(ResourceStringsAttributesStrings $strings): self
    {
        $this->initialized['strings'] = true;
        $this->strings = $strings;

        return $this;
    }
}
