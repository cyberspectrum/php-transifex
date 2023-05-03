<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostContextScreenshotMapsRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Create context screenshot map body request details.
     *
     * @var PostContextScreenshotMapsRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Create context screenshot map body request details.
     */
    public function getData(): PostContextScreenshotMapsRequestBodyData
    {
        return $this->data;
    }

    /**
     * Create context screenshot map body request details.
     */
    public function setData(PostContextScreenshotMapsRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
