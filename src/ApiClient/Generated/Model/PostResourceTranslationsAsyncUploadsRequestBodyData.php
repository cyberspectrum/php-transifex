<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceTranslationsAsyncUploadsRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource translations async upload attributes.
     *
     * @var PostResourceTranslationsAsyncUploadsRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * Resource translation Upload parent relationships.
     *
     * @var PostResourceTranslationsAsyncUploadsRequestBodyDataRelationships
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
     * Resource translations async upload attributes.
     */
    public function getAttributes(): PostResourceTranslationsAsyncUploadsRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    /**
     * Resource translations async upload attributes.
     */
    public function setAttributes(PostResourceTranslationsAsyncUploadsRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Resource translation Upload parent relationships.
     */
    public function getRelationships(): PostResourceTranslationsAsyncUploadsRequestBodyDataRelationships
    {
        return $this->relationships;
    }

    /**
     * Resource translation Upload parent relationships.
     */
    public function setRelationships(PostResourceTranslationsAsyncUploadsRequestBodyDataRelationships $relationships): self
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
