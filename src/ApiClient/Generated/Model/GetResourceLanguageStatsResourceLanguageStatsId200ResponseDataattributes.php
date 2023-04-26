<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;
use DateTimeInterface;

class GetResourceLanguageStatsResourceLanguageStatsId200ResponseDataattributes extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var DateTimeInterface|null
     */
    protected $lastProofreadUpdate;
    /**
     * @var DateTimeInterface|null
     */
    protected $lastReviewUpdate;
    /**
     * @var DateTimeInterface|null
     */
    protected $lastTranslationUpdate;
    /**
     * @var DateTimeInterface
     */
    protected $lastUpdate;
    /**
     * @var float
     */
    protected $proofreadStrings;
    /**
     * @var float
     */
    protected $proofreadWords;
    /**
     * @var float
     */
    protected $reviewedStrings;
    /**
     * @var float
     */
    protected $reviewedWords;
    /**
     * @var float
     */
    protected $totalStrings;
    /**
     * @var float
     */
    protected $totalWords;
    /**
     * @var float
     */
    protected $translatedStrings;
    /**
     * @var float
     */
    protected $translatedWords;
    /**
     * @var float
     */
    protected $untranslatedStrings;
    /**
     * @var float
     */
    protected $untranslatedWords;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getLastProofreadUpdate(): ?DateTimeInterface
    {
        return $this->lastProofreadUpdate;
    }

    public function setLastProofreadUpdate(?DateTimeInterface $lastProofreadUpdate): self
    {
        $this->initialized['lastProofreadUpdate'] = true;
        $this->lastProofreadUpdate = $lastProofreadUpdate;

        return $this;
    }

    public function getLastReviewUpdate(): ?DateTimeInterface
    {
        return $this->lastReviewUpdate;
    }

    public function setLastReviewUpdate(?DateTimeInterface $lastReviewUpdate): self
    {
        $this->initialized['lastReviewUpdate'] = true;
        $this->lastReviewUpdate = $lastReviewUpdate;

        return $this;
    }

    public function getLastTranslationUpdate(): ?DateTimeInterface
    {
        return $this->lastTranslationUpdate;
    }

    public function setLastTranslationUpdate(?DateTimeInterface $lastTranslationUpdate): self
    {
        $this->initialized['lastTranslationUpdate'] = true;
        $this->lastTranslationUpdate = $lastTranslationUpdate;

        return $this;
    }

    public function getLastUpdate(): DateTimeInterface
    {
        return $this->lastUpdate;
    }

    public function setLastUpdate(DateTimeInterface $lastUpdate): self
    {
        $this->initialized['lastUpdate'] = true;
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    public function getProofreadStrings(): float
    {
        return $this->proofreadStrings;
    }

    public function setProofreadStrings(float $proofreadStrings): self
    {
        $this->initialized['proofreadStrings'] = true;
        $this->proofreadStrings = $proofreadStrings;

        return $this;
    }

    public function getProofreadWords(): float
    {
        return $this->proofreadWords;
    }

    public function setProofreadWords(float $proofreadWords): self
    {
        $this->initialized['proofreadWords'] = true;
        $this->proofreadWords = $proofreadWords;

        return $this;
    }

    public function getReviewedStrings(): float
    {
        return $this->reviewedStrings;
    }

    public function setReviewedStrings(float $reviewedStrings): self
    {
        $this->initialized['reviewedStrings'] = true;
        $this->reviewedStrings = $reviewedStrings;

        return $this;
    }

    public function getReviewedWords(): float
    {
        return $this->reviewedWords;
    }

    public function setReviewedWords(float $reviewedWords): self
    {
        $this->initialized['reviewedWords'] = true;
        $this->reviewedWords = $reviewedWords;

        return $this;
    }

    public function getTotalStrings(): float
    {
        return $this->totalStrings;
    }

    public function setTotalStrings(float $totalStrings): self
    {
        $this->initialized['totalStrings'] = true;
        $this->totalStrings = $totalStrings;

        return $this;
    }

    public function getTotalWords(): float
    {
        return $this->totalWords;
    }

    public function setTotalWords(float $totalWords): self
    {
        $this->initialized['totalWords'] = true;
        $this->totalWords = $totalWords;

        return $this;
    }

    public function getTranslatedStrings(): float
    {
        return $this->translatedStrings;
    }

    public function setTranslatedStrings(float $translatedStrings): self
    {
        $this->initialized['translatedStrings'] = true;
        $this->translatedStrings = $translatedStrings;

        return $this;
    }

    public function getTranslatedWords(): float
    {
        return $this->translatedWords;
    }

    public function setTranslatedWords(float $translatedWords): self
    {
        $this->initialized['translatedWords'] = true;
        $this->translatedWords = $translatedWords;

        return $this;
    }

    public function getUntranslatedStrings(): float
    {
        return $this->untranslatedStrings;
    }

    public function setUntranslatedStrings(float $untranslatedStrings): self
    {
        $this->initialized['untranslatedStrings'] = true;
        $this->untranslatedStrings = $untranslatedStrings;

        return $this;
    }

    public function getUntranslatedWords(): float
    {
        return $this->untranslatedWords;
    }

    public function setUntranslatedWords(float $untranslatedWords): self
    {
        $this->initialized['untranslatedWords'] = true;
        $this->untranslatedWords = $untranslatedWords;

        return $this;
    }
}
