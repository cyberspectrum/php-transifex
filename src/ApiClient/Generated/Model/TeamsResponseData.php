<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class TeamsResponseData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Team attributes.
     *
     * @var TeamsResponseDataAttributes
     */
    protected $attributes;
    /**
     * Team identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * @var TeamsResponseDataLinks
     */
    protected $links;
    /**
     * Team relationships.
     *
     * @var TeamsResponseDataRelationships
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
     * Team attributes.
     */
    public function getAttributes(): TeamsResponseDataAttributes
    {
        return $this->attributes;
    }

    /**
     * Team attributes.
     */
    public function setAttributes(TeamsResponseDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Team identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Team identifier.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getLinks(): TeamsResponseDataLinks
    {
        return $this->links;
    }

    public function setLinks(TeamsResponseDataLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    /**
     * Team relationships.
     */
    public function getRelationships(): TeamsResponseDataRelationships
    {
        return $this->relationships;
    }

    /**
     * Team relationships.
     */
    public function setRelationships(TeamsResponseDataRelationships $relationships): self
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
