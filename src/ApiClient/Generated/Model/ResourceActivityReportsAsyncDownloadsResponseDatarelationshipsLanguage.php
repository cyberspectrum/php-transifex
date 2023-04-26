<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageData
     */
    protected $data;
    /**
     * @var ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageData
    {
        return $this->data;
    }

    public function setData(ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageLinks
    {
        return $this->links;
    }

    public function setLinks(ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
