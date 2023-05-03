<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchProjectWebhooksWebhookId200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * List of project webhook objects in an organization.
     *
     * @var PatchProjectWebhooksWebhookId200ResponseData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * List of project webhook objects in an organization.
     */
    public function getData(): PatchProjectWebhooksWebhookId200ResponseData
    {
        return $this->data;
    }

    /**
     * List of project webhook objects in an organization.
     */
    public function setData(PatchProjectWebhooksWebhookId200ResponseData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
