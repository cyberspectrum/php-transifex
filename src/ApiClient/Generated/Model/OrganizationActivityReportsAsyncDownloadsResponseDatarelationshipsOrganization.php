<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsOrganization extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsOrganizationData
     */
    protected $data;
    /**
     * @var OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsOrganizationLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsOrganizationData
    {
        return $this->data;
    }

    public function setData(OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsOrganizationData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsOrganizationLinks
    {
        return $this->links;
    }

    public function setLinks(OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsOrganizationLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
