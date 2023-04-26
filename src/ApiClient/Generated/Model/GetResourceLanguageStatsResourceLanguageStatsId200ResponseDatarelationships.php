<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsLanguage
     */
    protected $language;
    /**
     * @var GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsResource
     */
    protected $resource;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getLanguage(): GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsLanguage
    {
        return $this->language;
    }

    public function setLanguage(GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getResource(): GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsResource
    {
        return $this->resource;
    }

    public function setResource(GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }
}
