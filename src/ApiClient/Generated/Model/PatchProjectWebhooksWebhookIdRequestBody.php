<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchProjectWebhooksWebhookIdRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Update project webhook body request details.
     *
     * @var PatchProjectWebhooksWebhookIdRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Update project webhook body request details.
     */
    public function getData(): PatchProjectWebhooksWebhookIdRequestBodyData
    {
        return $this->data;
    }

    /**
     * Update project webhook body request details.
     */
    public function setData(PatchProjectWebhooksWebhookIdRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
