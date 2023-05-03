<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostProjectsRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PostProjectsRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * Resource parent relationships.
     *
     * @var PostProjectsRequestBodyDataRelationships
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

    public function getAttributes(): PostProjectsRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(PostProjectsRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Resource parent relationships.
     */
    public function getRelationships(): PostProjectsRequestBodyDataRelationships
    {
        return $this->relationships;
    }

    /**
     * Resource parent relationships.
     */
    public function setRelationships(PostProjectsRequestBodyDataRelationships $relationships): self
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
