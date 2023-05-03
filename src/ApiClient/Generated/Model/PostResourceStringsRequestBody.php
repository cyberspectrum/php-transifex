<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringsRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Create resource string body request details.
     *
     * @var PostResourceStringsRequestBodyData2
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Create resource string body request details.
     */
    public function getData(): PostResourceStringsRequestBodyData2
    {
        return $this->data;
    }

    /**
     * Create resource string body request details.
     */
    public function setData(PostResourceStringsRequestBodyData2 $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
