<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResourcesResponse
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ResourcesResponseAttributes
     */
    protected $attributes;
    /**
     * Resource identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Resource links.
     *
     * @var ResourcesResponseLinks
     */
    protected $links;
    /**
     * Resource relationships.
     *
     * @var ResourcesResponseRelationships
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

    public function getAttributes(): ResourcesResponseAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(ResourcesResponseAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Resource identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Resource identifier.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Resource links.
     */
    public function getLinks(): ResourcesResponseLinks
    {
        return $this->links;
    }

    /**
     * Resource links.
     */
    public function setLinks(ResourcesResponseLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    /**
     * Resource relationships.
     */
    public function getRelationships(): ResourcesResponseRelationships
    {
        return $this->relationships;
    }

    /**
     * Resource relationships.
     */
    public function setRelationships(ResourcesResponseRelationships $relationships): self
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
