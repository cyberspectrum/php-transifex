<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsResource extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsResourceData
     */
    protected $data;
    /**
     * @var ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsResourceLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsResourceData
    {
        return $this->data;
    }

    public function setData(ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsResourceData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsResourceLinks
    {
        return $this->links;
    }

    public function setLinks(ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsResourceLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
