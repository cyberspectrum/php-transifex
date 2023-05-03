<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsProject extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsProjectData
     */
    protected $data;
    /**
     * @var ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsProjectLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsProjectData
    {
        return $this->data;
    }

    public function setData(ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsProjectData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsProjectLinks
    {
        return $this->links;
    }

    public function setLinks(ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsProjectLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
