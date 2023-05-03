<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringsAsyncUploadsRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Create source upload body request details.
     *
     * @var PostResourceStringsAsyncUploadsRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Create source upload body request details.
     */
    public function getData(): PostResourceStringsAsyncUploadsRequestBodyData
    {
        return $this->data;
    }

    /**
     * Create source upload body request details.
     */
    public function setData(PostResourceStringsAsyncUploadsRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
