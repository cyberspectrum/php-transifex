<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourcesRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource attributes.
     *
     * @var PostResourcesRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * Resource parent relationships.
     *
     * @var PostResourcesRequestBodyDataRelationships
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
     * Resource attributes.
     */
    public function getAttributes(): PostResourcesRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    /**
     * Resource attributes.
     */
    public function setAttributes(PostResourcesRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Resource parent relationships.
     */
    public function getRelationships(): PostResourcesRequestBodyDataRelationships
    {
        return $this->relationships;
    }

    /**
     * Resource parent relationships.
     */
    public function setRelationships(PostResourcesRequestBodyDataRelationships $relationships): self
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
