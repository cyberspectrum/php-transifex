<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringsAsyncUploadsRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Source Upload attributes attributes.
     *
     * @var PostResourceStringsAsyncUploadsRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * Source Upload parent relationships.
     *
     * @var PostResourceStringsAsyncUploadsRequestBodyDataRelationships
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
     * Source Upload attributes attributes.
     */
    public function getAttributes(): PostResourceStringsAsyncUploadsRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    /**
     * Source Upload attributes attributes.
     */
    public function setAttributes(PostResourceStringsAsyncUploadsRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Source Upload parent relationships.
     */
    public function getRelationships(): PostResourceStringsAsyncUploadsRequestBodyDataRelationships
    {
        return $this->relationships;
    }

    /**
     * Source Upload parent relationships.
     */
    public function setRelationships(PostResourceStringsAsyncUploadsRequestBodyDataRelationships $relationships): self
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
