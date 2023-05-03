<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsUser extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsUserData
     */
    protected $data;
    /**
     * @var OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsUserLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsUserData
    {
        return $this->data;
    }

    public function setData(OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsUserData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsUserLinks
    {
        return $this->links;
    }

    public function setLinks(OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsUserLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
