<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceActivityReportsAsyncDownloadsRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Create resource activity report download body request details.
     *
     * @var PostResourceActivityReportsAsyncDownloadsRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Create resource activity report download body request details.
     */
    public function getData(): PostResourceActivityReportsAsyncDownloadsRequestBodyData
    {
        return $this->data;
    }

    /**
     * Create resource activity report download body request details.
     */
    public function setData(PostResourceActivityReportsAsyncDownloadsRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
