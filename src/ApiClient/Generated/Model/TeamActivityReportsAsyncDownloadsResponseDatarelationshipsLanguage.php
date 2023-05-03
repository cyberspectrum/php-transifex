<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class TeamActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var TeamActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageData
     */
    protected $data;
    /**
     * @var TeamActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): TeamActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageData
    {
        return $this->data;
    }

    public function setData(TeamActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): TeamActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageLinks
    {
        return $this->links;
    }

    public function setLinks(TeamActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
