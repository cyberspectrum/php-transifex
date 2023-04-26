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

namespace CyberSpectrum\PhpTransifex\Model;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceLanguageStats200Response;
use CyberSpectrum\PhpTransifex\Client;
use DateTimeInterface;

/**
 * This class represents a language statistic.
 *
 * @psalm-suppress PropertyNotSetInConstructor
 *
 * @SuppressWarnings(PHPMD.LongVariable)
 */
final class Statistic
{
    private bool $loaded = false;
    private ?DateTimeInterface $lastProofreadUpdate;
    private ?DateTimeInterface $lastReviewUpdate;
    private ?DateTimeInterface $lastTranslationUpdate;
    private DateTimeInterface $lastUpdate;
    private float $proofreadStrings;
    private float $proofreadWords;
    private float $reviewedStrings;
    private float $reviewedWords;
    private float $totalStrings;
    private float $totalWords;
    private float $translatedStrings;
    private float $translatedWords;
    private float $untranslatedStrings;
    private float $untranslatedWords;

    public function __construct(
        private readonly Client $client,
        private readonly Translation $translation,
    ) {
    }

    public function getLastProofreadUpdate(): ?DateTimeInterface
    {
        $this->load();
        return $this->lastProofreadUpdate;
    }

    public function getLastReviewUpdate(): ?DateTimeInterface
    {
        $this->load();
        return $this->lastReviewUpdate;
    }

    public function getLastTranslationUpdate(): ?DateTimeInterface
    {
        $this->load();
        return $this->lastTranslationUpdate;
    }

    public function getLastUpdate(): DateTimeInterface
    {
        $this->load();
        return $this->lastUpdate;
    }

    public function getProofreadStrings(): float
    {
        $this->load();
        return $this->proofreadStrings;
    }

    public function getProofreadWords(): float
    {
        $this->load();
        return $this->proofreadWords;
    }

    public function getReviewedStrings(): float
    {
        $this->load();
        return $this->reviewedStrings;
    }

    public function getReviewedWords(): float
    {
        $this->load();
        return $this->reviewedWords;
    }

    public function getTotalStrings(): float
    {
        $this->load();
        return $this->totalStrings;
    }

    public function getTotalWords(): float
    {
        $this->load();
        return $this->totalWords;
    }

    public function getTranslatedStrings(): float
    {
        $this->load();
        return $this->translatedStrings;
    }

    public function getTranslatedWords(): float
    {
        $this->load();
        return $this->translatedWords;
    }

    public function getUntranslatedStrings(): float
    {
        $this->load();
        return $this->untranslatedStrings;
    }

    public function getUntranslatedWords(): float
    {
        $this->load();
        return $this->untranslatedWords;
    }

    /**
     * The percentage of the resource that has been translated.
     */
    public function getCompletedPercentage(): float
    {
        return (100 / $this->getTotalStrings()) * $this->getTranslatedStrings();
    }

    private function load(): void
    {
        if ($this->loaded) {
            return;
        }

        $resource = $this->translation->getResource();
        // FIXME: pagination!
        $response = $this->client->getResourceLanguageStat([
            'filter[project]' => $resource->getProject()->getProjectId(),
            'filter[resource]' => $resourceId = $resource->getResourceId(),
            'filter[language]' => $languageId = $this->translation->getLanguage()->getLanguageId(),
        ]);
        assert($response instanceof GetResourceLanguageStats200Response);

        foreach ($response->getData() as $item) {
            if ($item->getRelationships()->getResource()->getData()->getId() !== $resourceId) {
                continue;
            }
            if ($item->getRelationships()->getLanguage()->getData()->getId() !== $languageId) {
                continue;
            }
            // Found it.
            $attributes = $item->getAttributes();

            $this->lastProofreadUpdate   = $attributes->getLastProofreadUpdate();
            $this->lastReviewUpdate      = $attributes->getLastReviewUpdate();
            $this->lastTranslationUpdate = $attributes->getLastTranslationUpdate();
            $this->lastUpdate            = $attributes->getLastUpdate();
            $this->proofreadStrings      = $attributes->getProofreadStrings();
            $this->proofreadWords        = $attributes->getProofreadWords();
            $this->reviewedStrings       = $attributes->getReviewedStrings();
            $this->reviewedWords         = $attributes->getReviewedWords();
            $this->totalStrings          = $attributes->getTotalStrings();
            $this->totalWords            = $attributes->getTotalWords();
            $this->translatedStrings     = $attributes->getTranslatedStrings();
            $this->translatedWords       = $attributes->getTranslatedWords();
            $this->untranslatedStrings   = $attributes->getUntranslatedStrings();
            $this->untranslatedWords     = $attributes->getUntranslatedWords();

            break;
        }

        $this->loaded = true;
    }
}
