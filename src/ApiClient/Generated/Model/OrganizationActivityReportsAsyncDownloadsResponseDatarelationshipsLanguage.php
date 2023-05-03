<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageData
     */
    protected $data;
    /**
     * @var OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageData
    {
        return $this->data;
    }

    public function setData(OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageLinks
    {
        return $this->links;
    }

    public function setLinks(OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
