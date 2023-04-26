<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceTranslationsAsyncDownloadsRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Create resource translation download body request details.
     *
     * @var PostResourceTranslationsAsyncDownloadsRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Create resource translation download body request details.
     */
    public function getData(): PostResourceTranslationsAsyncDownloadsRequestBodyData
    {
        return $this->data;
    }

    /**
     * Create resource translation download body request details.
     */
    public function setData(PostResourceTranslationsAsyncDownloadsRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
