<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTmxAsyncUploadsRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Create tmx_async_upload body request details.
     *
     * @var PostTmxAsyncUploadsRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Create tmx_async_upload body request details.
     */
    public function getData(): PostTmxAsyncUploadsRequestBodyData
    {
        return $this->data;
    }

    /**
     * Create tmx_async_upload body request details.
     */
    public function setData(PostTmxAsyncUploadsRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
