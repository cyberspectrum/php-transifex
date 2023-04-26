<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringsAsyncDownloadsRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource strings async download attributes.
     *
     * @var PostResourceStringsAsyncDownloadsRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * Resource strings download parent relationships.
     *
     * @var PostResourceStringsAsyncDownloadsRequestBodyDataRelationships
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
    public function getAttributes(): PostResourceStringsAsyncDownloadsRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    /**
     * Resource strings async download attributes.
     */
    public function setAttributes(PostResourceStringsAsyncDownloadsRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Resource strings download parent relationships.
     */
    public function getRelationships(): PostResourceStringsAsyncDownloadsRequestBodyDataRelationships
    {
        return $this->relationships;
    }

    /**
     * Resource strings download parent relationships.
     */
    public function setRelationships(PostResourceStringsAsyncDownloadsRequestBodyDataRelationships $relationships): self
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
