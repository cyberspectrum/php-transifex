<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResourceResponse
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource String attributes.
     *
     * @var ResourceResponseAttributes
     */
    protected $attributes;
    /**
     * Resource String identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Resource String link.
     *
     * @var ResourceResponseLinks
     */
    protected $links;
    /**
     * Resource String relationships.
     *
     * @var ResourceResponseRelationships
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
     * Resource String attributes.
     */
    public function getAttributes(): ResourceResponseAttributes
    {
        return $this->attributes;
    }

    /**
     * Resource String attributes.
     */
    public function setAttributes(ResourceResponseAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Resource String identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Resource String identifier.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Resource String link.
     */
    public function getLinks(): ResourceResponseLinks
    {
        return $this->links;
    }

    /**
     * Resource String link.
     */
    public function setLinks(ResourceResponseLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    /**
     * Resource String relationships.
     */
    public function getRelationships(): ResourceResponseRelationships
    {
        return $this->relationships;
    }

    /**
     * Resource String relationships.
     */
    public function setRelationships(ResourceResponseRelationships $relationships): self
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
