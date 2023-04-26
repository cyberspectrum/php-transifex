<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class TeamActivityReportsAsyncDownloadsResponseDatarelationshipsUser extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var TeamActivityReportsAsyncDownloadsResponseDatarelationshipsUserData
     */
    protected $data;
    /**
     * @var TeamActivityReportsAsyncDownloadsResponseDatarelationshipsUserLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): TeamActivityReportsAsyncDownloadsResponseDatarelationshipsUserData
    {
        return $this->data;
    }

    public function setData(TeamActivityReportsAsyncDownloadsResponseDatarelationshipsUserData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): TeamActivityReportsAsyncDownloadsResponseDatarelationshipsUserLinks
    {
        return $this->links;
    }

    public function setLinks(TeamActivityReportsAsyncDownloadsResponseDatarelationshipsUserLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
