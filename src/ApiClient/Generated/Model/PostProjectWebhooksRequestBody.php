<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostProjectWebhooksRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Create project webhook body request details.
     *
     * @var PostProjectWebhooksRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Create project webhook body request details.
     */
    public function getData(): PostProjectWebhooksRequestBodyData
    {
        return $this->data;
    }

    /**
     * Create project webhook body request details.
     */
    public function setData(PostProjectWebhooksRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
