<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ProjectWebhooksResponseData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Project Webhook attributes.
     *
     * @var ProjectWebhooksResponseDataAttributes
     */
    protected $attributes;
    /**
     * Project Webhook identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Project Webhook self link.
     *
     * @var ProjectWebhooksResponseDataLinks
     */
    protected $links;
    /**
     * Project Webhook relationships.
     *
     * @var ProjectWebhooksResponseDataRelationships
     */
    protected $relationships;
    /**
     * @var string
     */
    protected $type;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Project Webhook attributes.
     */
    public function getAttributes(): ProjectWebhooksResponseDataAttributes
    {
        return $this->attributes;
    }

    /**
     * Project Webhook attributes.
     */
    public function setAttributes(ProjectWebhooksResponseDataAttributes $attributes): self
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

    /**
     * Project Webhook self link.
     */
    public function getLinks(): ProjectWebhooksResponseDataLinks
    {
        return $this->links;
    }

    /**
     * Project Webhook self link.
     */
    public function setLinks(ProjectWebhooksResponseDataLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    /**
     * Project Webhook relationships.
     */
    public function getRelationships(): ProjectWebhooksResponseDataRelationships
    {
        return $this->relationships;
    }

    /**
     * Project Webhook relationships.
     */
    public function setRelationships(ProjectWebhooksResponseDataRelationships $relationships): self
    {
        $this->initialized['relationships'] = true;
        $this->relationships = $relationships;

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
