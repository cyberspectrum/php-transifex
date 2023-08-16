<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use DateTimeInterface;

class ResourceTranslationsResponseDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The date when a resource string is made available, in a target language, to receive translations. When a new resource string is added to the system, the value of this field is the same as the resource string creation date, for every existing target language in the related project. When a new target language is added to a project, the value of this field is the same as the date the target language was added, for all resource strings already in the project.
     *
     * @var DateTimeInterface
     */
    protected $datetimeCreated;
    /**
     * The date that the resource translation was proofread. Null, if the resource translation is not proofread.
     *
     * @var DateTimeInterface|null
     */
    protected $datetimeProofread;
    /**
     * The date that the resource translation was reviewed. If multiple reviews have occurred, then this date holds the latest. Null, if the resource translation is not reviewed.
     *
     * @var DateTimeInterface|null
     */
    protected $datetimeReviewed;
    /**
     * The date that the resource string was last translated on this language. If multiple edits on the strings have occurred, then this date holds the latest. Null, if the resource string is not translated.
     *
     * @var DateTimeInterface|null
     */
    protected $datetimeTranslated;
    /**
     * If the resource translation is finalized or not. Depending on the number of review steps in the project, this either denotes reviewed (1 review step) or proofread (2 review steps).
     *
     * @var bool
     */
    protected $finalized;
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
     * Dictionary with the translation content. For pluralized resource strings, the keys will be all the available plural rules for target language, as defined in CLDR, and the values the actual translation for each plural rule.
     * For non-pluralized resource strings, only the default plural rule ('other') will be present.
     * The object will be `null` in case of untranslated content.
     *
     * @var ResourceTranslationsResponseDataAttributesStrings|null
     */
    protected $strings;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The date when a resource string is made available, in a target language, to receive translations. When a new resource string is added to the system, the value of this field is the same as the resource string creation date, for every existing target language in the related project. When a new target language is added to a project, the value of this field is the same as the date the target language was added, for all resource strings already in the project.
     */
    public function getDatetimeCreated(): DateTimeInterface
    {
        return $this->datetimeCreated;
    }

    /**
     * The date when a resource string is made available, in a target language, to receive translations. When a new resource string is added to the system, the value of this field is the same as the resource string creation date, for every existing target language in the related project. When a new target language is added to a project, the value of this field is the same as the date the target language was added, for all resource strings already in the project.
     */
    public function setDatetimeCreated(DateTimeInterface $datetimeCreated): self
    {
        $this->initialized['datetimeCreated'] = true;
        $this->datetimeCreated = $datetimeCreated;

        return $this;
    }

    /**
     * The date that the resource translation was proofread. Null, if the resource translation is not proofread.
     */
    public function getDatetimeProofread(): ?DateTimeInterface
    {
        return $this->datetimeProofread;
    }

    /**
     * The date that the resource translation was proofread. Null, if the resource translation is not proofread.
     */
    public function setDatetimeProofread(?DateTimeInterface $datetimeProofread): self
    {
        $this->initialized['datetimeProofread'] = true;
        $this->datetimeProofread = $datetimeProofread;

        return $this;
    }

    /**
     * The date that the resource translation was reviewed. If multiple reviews have occurred, then this date holds the latest. Null, if the resource translation is not reviewed.
     */
    public function getDatetimeReviewed(): ?DateTimeInterface
    {
        return $this->datetimeReviewed;
    }

    /**
     * The date that the resource translation was reviewed. If multiple reviews have occurred, then this date holds the latest. Null, if the resource translation is not reviewed.
     */
    public function setDatetimeReviewed(?DateTimeInterface $datetimeReviewed): self
    {
        $this->initialized['datetimeReviewed'] = true;
        $this->datetimeReviewed = $datetimeReviewed;

        return $this;
    }

    /**
     * The date that the resource string was last translated on this language. If multiple edits on the strings have occurred, then this date holds the latest. Null, if the resource string is not translated.
     */
    public function getDatetimeTranslated(): ?DateTimeInterface
    {
        return $this->datetimeTranslated;
    }

    /**
     * The date that the resource string was last translated on this language. If multiple edits on the strings have occurred, then this date holds the latest. Null, if the resource string is not translated.
     */
    public function setDatetimeTranslated(?DateTimeInterface $datetimeTranslated): self
    {
        $this->initialized['datetimeTranslated'] = true;
        $this->datetimeTranslated = $datetimeTranslated;

        return $this;
    }

    /**
     * If the resource translation is finalized or not. Depending on the number of review steps in the project, this either denotes reviewed (1 review step) or proofread (2 review steps).
     */
    public function getFinalized(): bool
    {
        return $this->finalized;
    }

    /**
     * If the resource translation is finalized or not. Depending on the number of review steps in the project, this either denotes reviewed (1 review step) or proofread (2 review steps).
     */
    public function setFinalized(bool $finalized): self
    {
        $this->initialized['finalized'] = true;
        $this->finalized = $finalized;

        return $this;
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
     * Dictionary with the translation content. For pluralized resource strings, the keys will be all the available plural rules for target language, as defined in CLDR, and the values the actual translation for each plural rule.
     * For non-pluralized resource strings, only the default plural rule ('other') will be present.
     * The object will be `null` in case of untranslated content.
     */
    public function getStrings(): ?ResourceTranslationsResponseDataAttributesStrings
    {
        return $this->strings;
    }

    /**
     * Dictionary with the translation content. For pluralized resource strings, the keys will be all the available plural rules for target language, as defined in CLDR, and the values the actual translation for each plural rule.
     * For non-pluralized resource strings, only the default plural rule ('other') will be present.
     * The object will be `null` in case of untranslated content.
     */
    public function setStrings(?ResourceTranslationsResponseDataAttributesStrings $strings): self
    {
        $this->initialized['strings'] = true;
        $this->strings = $strings;

        return $this;
    }
}
