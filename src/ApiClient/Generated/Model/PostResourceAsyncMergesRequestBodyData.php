<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceAsyncMergesRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource strings async download attributes.
     *
     * @var PostResourceAsyncMergesRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * @var PostResourceAsyncMergesRequestBodyDataRelationships
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
     * Resource strings async download attributes.
     */
    public function getAttributes(): PostResourceAsyncMergesRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    /**
     * Resource strings async download attributes.
     */
    public function setAttributes(PostResourceAsyncMergesRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    public function getRelationships(): PostResourceAsyncMergesRequestBodyDataRelationships
    {
        return $this->relationships;
    }

    public function setRelationships(PostResourceAsyncMergesRequestBodyDataRelationships $relationships): self
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
