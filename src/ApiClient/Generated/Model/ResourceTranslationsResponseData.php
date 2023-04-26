<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResourceTranslationsResponseData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource Translation attributes.
     *
     * @var ResourceTranslationsResponseDataAttributes
     */
    protected $attributes;
    /**
     * Resource Translation identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Resource Translation links.
     *
     * @var ResourceTranslationsResponseDataLinks
     */
    protected $links;
    /**
     * Resource Translation relationships.
     *
     * @var ResourceTranslationsResponseDataRelationships1
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
     * Resource Translation attributes.
     */
    public function getAttributes(): ResourceTranslationsResponseDataAttributes
    {
        return $this->attributes;
    }

    /**
     * Resource Translation attributes.
     */
    public function setAttributes(ResourceTranslationsResponseDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Resource Translation identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Resource Translation identifier.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Resource Translation links.
     */
    public function getLinks(): ResourceTranslationsResponseDataLinks
    {
        return $this->links;
    }

    /**
     * Resource Translation links.
     */
    public function setLinks(ResourceTranslationsResponseDataLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    /**
     * Resource Translation relationships.
     */
    public function getRelationships(): ResourceTranslationsResponseDataRelationships1
    {
        return $this->relationships;
    }

    /**
     * Resource Translation relationships.
     */
    public function setRelationships(ResourceTranslationsResponseDataRelationships1 $relationships): self
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
