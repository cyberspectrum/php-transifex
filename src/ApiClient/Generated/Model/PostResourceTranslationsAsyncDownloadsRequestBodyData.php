<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceTranslationsAsyncDownloadsRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource translations async download attributes.
     *
     * @var PostResourceTranslationsAsyncDownloadsRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * Resource translation Download parent relationships.
     *
     * @var PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationships
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
     * Resource translations async download attributes.
     */
    public function getAttributes(): PostResourceTranslationsAsyncDownloadsRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    /**
     * Resource translations async download attributes.
     */
    public function setAttributes(PostResourceTranslationsAsyncDownloadsRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Resource translation Download parent relationships.
     */
    public function getRelationships(): PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationships
    {
        return $this->relationships;
    }

    /**
     * Resource translation Download parent relationships.
     */
    public function setRelationships(PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationships $relationships): self
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
