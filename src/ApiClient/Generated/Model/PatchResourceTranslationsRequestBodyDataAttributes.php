<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchResourceTranslationsRequestBodyDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * If the resource translation is proofread or not.
     *
     * @var bool
     */
    protected $proofread;
    /**
     * If the resource translation is reviewed or not.
     *
     * @var bool
     */
    protected $reviewed;
    /**
     * Dictionary with the translation content. For pluralized resource strings, the keys should be all the available plural rules for target language, as defined in CLDR, and the values the actual translation for each plural rule.
     *
     * @var PatchResourceTranslationsRequestBodyDataAttributesStrings|null
     */
    protected $strings;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * If the resource translation is proofread or not.
     */
    public function getProofread(): bool
    {
        return $this->proofread;
    }

    /**
     * If the resource translation is proofread or not.
     */
    public function setProofread(bool $proofread): self
    {
        $this->initialized['proofread'] = true;
        $this->proofread = $proofread;

        return $this;
    }

    /**
     * If the resource translation is reviewed or not.
     */
    public function getReviewed(): bool
    {
        return $this->reviewed;
    }

    /**
     * If the resource translation is reviewed or not.
     */
    public function setReviewed(bool $reviewed): self
    {
        $this->initialized['reviewed'] = true;
        $this->reviewed = $reviewed;

        return $this;
    }

    /**
     * Dictionary with the translation content. For pluralized resource strings, the keys should be all the available plural rules for target language, as defined in CLDR, and the values the actual translation for each plural rule.
    In order to delete existing translated content, the client should supply `null` as the value of the object.
     */
    public function getStrings(): ?PatchResourceTranslationsRequestBodyDataAttributesStrings
    {
        return $this->strings;
    }

    /**
     * Dictionary with the translation content. For pluralized resource strings, the keys should be all the available plural rules for target language, as defined in CLDR, and the values the actual translation for each plural rule.
    In order to delete existing translated content, the client should supply `null` as the value of the object.
     */
    public function setStrings(?PatchResourceTranslationsRequestBodyDataAttributesStrings $strings): self
    {
        $this->initialized['strings'] = true;
        $this->strings = $strings;

        return $this;
    }
}
