<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsResource
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsResourceData
     */
    protected $data;
    /**
     * @var GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsResourceLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsResourceData
    {
        return $this->data;
    }

    public function setData(GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsResourceData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsResourceLinks
    {
        return $this->links;
    }

    public function setLinks(GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsResourceLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
