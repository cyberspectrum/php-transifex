<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsUser extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsUserData
     */
    protected $data;
    /**
     * @var ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsUserLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsUserData
    {
        return $this->data;
    }

    public function setData(ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsUserData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsUserLinks
    {
        return $this->links;
    }

    public function setLinks(ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsUserLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
