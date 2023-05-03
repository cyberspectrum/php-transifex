<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceLanguageStats200ResponseDataItemrelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetResourceLanguageStats200ResponseDataItemrelationshipsLanguage
     */
    protected $language;
    /**
     * @var GetResourceLanguageStats200ResponseDataItemrelationshipsResource
     */
    protected $resource;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getLanguage(): GetResourceLanguageStats200ResponseDataItemrelationshipsLanguage
    {
        return $this->language;
    }

    public function setLanguage(GetResourceLanguageStats200ResponseDataItemrelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getResource(): GetResourceLanguageStats200ResponseDataItemrelationshipsResource
    {
        return $this->resource;
    }

    public function setResource(GetResourceLanguageStats200ResponseDataItemrelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }
}
