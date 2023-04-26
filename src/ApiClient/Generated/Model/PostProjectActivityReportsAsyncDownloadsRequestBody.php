<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostProjectActivityReportsAsyncDownloadsRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Create project activity report download body request details.
     *
     * @var PostProjectActivityReportsAsyncDownloadsRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Create project activity report download body request details.
     */
    public function getData(): PostProjectActivityReportsAsyncDownloadsRequestBodyData
    {
        return $this->data;
    }

    /**
     * Create project activity report download body request details.
     */
    public function setData(PostProjectActivityReportsAsyncDownloadsRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
