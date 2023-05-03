<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTmxAsyncDownloadsRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PostTmxAsyncDownloadsRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * Source Upload parent relationships.
     *
     * @var PostTmxAsyncDownloadsRequestBodyDataRelationships
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

    public function getAttributes(): PostTmxAsyncDownloadsRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(PostTmxAsyncDownloadsRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Source Upload parent relationships.
     */
    public function getRelationships(): PostTmxAsyncDownloadsRequestBodyDataRelationships
    {
        return $this->relationships;
    }

    /**
     * Source Upload parent relationships.
     */
    public function setRelationships(PostTmxAsyncDownloadsRequestBodyDataRelationships $relationships): self
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
