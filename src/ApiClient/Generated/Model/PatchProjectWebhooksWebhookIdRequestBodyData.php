<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchProjectWebhooksWebhookIdRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * ProjectWebhook attributes.
     *
     * @var PatchProjectWebhooksWebhookIdRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * Project Webhook identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * ProjectWebhook attributes.
     */
    public function getAttributes(): PatchProjectWebhooksWebhookIdRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    /**
     * ProjectWebhook attributes.
     */
    public function setAttributes(PatchProjectWebhooksWebhookIdRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Project Webhook identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Project Webhook identifier.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
