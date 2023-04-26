<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsUser extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsUserData
     */
    protected $data;
    /**
     * @var ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsUserLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsUserData
    {
        return $this->data;
    }

    public function setData(ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsUserData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsUserLinks
    {
        return $this->links;
    }

    public function setLinks(ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsUserLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
