<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsLanguage
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsLanguageData
     */
    protected $data;
    /**
     * @var GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsLanguageLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsLanguageData
    {
        return $this->data;
    }

    public function setData(GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsLanguageData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsLanguageLinks
    {
        return $this->links;
    }

    public function setLinks(GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationshipsLanguageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
