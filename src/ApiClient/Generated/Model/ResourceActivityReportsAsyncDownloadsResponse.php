<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResourceActivityReportsAsyncDownloadsResponse
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ResourceActivityReportsAsyncDownloadsResponseData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): ResourceActivityReportsAsyncDownloadsResponseData
    {
        return $this->data;
    }

    public function setData(ResourceActivityReportsAsyncDownloadsResponseData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
