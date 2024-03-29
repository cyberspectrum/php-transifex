<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceTranslationsAsyncUploadsRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Create resource translation upload body request details.
     *
     * @var PostResourceTranslationsAsyncUploadsRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Create resource translation upload body request details.
     */
    public function getData(): PostResourceTranslationsAsyncUploadsRequestBodyData
    {
        return $this->data;
    }

    /**
     * Create resource translation upload body request details.
     */
    public function setData(PostResourceTranslationsAsyncUploadsRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
