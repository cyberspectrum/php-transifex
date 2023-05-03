<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceLanguageStats200ResponseDataItemrelationshipsResource
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetResourceLanguageStats200ResponseDataItemrelationshipsResourceData
     */
    protected $data;
    /**
     * @var GetResourceLanguageStats200ResponseDataItemrelationshipsResourceLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): GetResourceLanguageStats200ResponseDataItemrelationshipsResourceData
    {
        return $this->data;
    }

    public function setData(GetResourceLanguageStats200ResponseDataItemrelationshipsResourceData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): GetResourceLanguageStats200ResponseDataItemrelationshipsResourceLinks
    {
        return $this->links;
    }

    public function setLinks(GetResourceLanguageStats200ResponseDataItemrelationshipsResourceLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
