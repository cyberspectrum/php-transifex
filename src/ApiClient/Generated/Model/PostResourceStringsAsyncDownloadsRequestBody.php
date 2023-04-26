<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringsAsyncDownloadsRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Create resource string download body request details.
     *
     * @var PostResourceStringsAsyncDownloadsRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Create resource string download body request details.
     */
    public function getData(): PostResourceStringsAsyncDownloadsRequestBodyData
    {
        return $this->data;
    }

    /**
     * Create resource string download body request details.
     */
    public function setData(PostResourceStringsAsyncDownloadsRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
