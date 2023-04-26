<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostOrganizationActivityReportsAsyncDownloadsRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Create organization activity report download body request.
     *
     * @var PostOrganizationActivityReportsAsyncDownloadsRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Create organization activity report download body request.
    details.
     */
    public function getData(): PostOrganizationActivityReportsAsyncDownloadsRequestBodyData
    {
        return $this->data;
    }

    /**
     * Create organization activity report download body request.
    details.
     */
    public function setData(PostOrganizationActivityReportsAsyncDownloadsRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
