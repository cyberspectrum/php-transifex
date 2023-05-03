<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class ResourceActivityReportsAsyncDownloadsResponseDatarelationships extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage
     */
    protected $language;
    /**
     * @var ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsResource
     */
    protected $resource;
    /**
     * @var ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsUser
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getLanguage(): ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage
    {
        return $this->language;
    }

    public function setLanguage(ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getResource(): ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsResource
    {
        return $this->resource;
    }

    public function setResource(ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }

    public function getUser(): ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsUser
    {
        return $this->user;
    }

    public function setUser(ResourceActivityReportsAsyncDownloadsResponseDatarelationshipsUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
