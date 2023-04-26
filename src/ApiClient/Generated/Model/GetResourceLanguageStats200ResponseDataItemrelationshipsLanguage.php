<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceLanguageStats200ResponseDataItemrelationshipsLanguage
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetResourceLanguageStats200ResponseDataItemrelationshipsLanguageData
     */
    protected $data;
    /**
     * @var GetResourceLanguageStats200ResponseDataItemrelationshipsLanguageLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): GetResourceLanguageStats200ResponseDataItemrelationshipsLanguageData
    {
        return $this->data;
    }

    public function setData(GetResourceLanguageStats200ResponseDataItemrelationshipsLanguageData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): GetResourceLanguageStats200ResponseDataItemrelationshipsLanguageLinks
    {
        return $this->links;
    }

    public function setLinks(GetResourceLanguageStats200ResponseDataItemrelationshipsLanguageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
