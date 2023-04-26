<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringCommentsRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource String Comment attributes.
     *
     * @var PostResourceStringCommentsRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * Resource String parent relationships.
     *
     * @var PostResourceStringCommentsRequestBodyDataRelationships
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
     * Resource String Comment attributes.
     */
    public function getAttributes(): PostResourceStringCommentsRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    /**
     * Resource String Comment attributes.
     */
    public function setAttributes(PostResourceStringCommentsRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Resource String parent relationships.
     */
    public function getRelationships(): PostResourceStringCommentsRequestBodyDataRelationships
    {
        return $this->relationships;
    }

    /**
     * Resource String parent relationships.
     */
    public function setRelationships(PostResourceStringCommentsRequestBodyDataRelationships $relationships): self
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
