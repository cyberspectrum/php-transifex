<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetOrganizationsResponseData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Organization attributes.
     *
     * @var GetOrganizationsResponseDataAttributes
     */
    protected $attributes;
    /**
     * Organization identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Organization links.
     *
     * @var GetOrganizationsResponseDataLinks
     */
    protected $links;
    /**
     * @var GetOrganizationsResponseDataRelationships
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
     * Organization attributes.
     */
    public function getAttributes(): GetOrganizationsResponseDataAttributes
    {
        return $this->attributes;
    }

    /**
     * Organization attributes.
     */
    public function setAttributes(GetOrganizationsResponseDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Organization identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Organization identifier.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Organization links.
     */
    public function getLinks(): GetOrganizationsResponseDataLinks
    {
        return $this->links;
    }

    /**
     * Organization links.
     */
    public function setLinks(GetOrganizationsResponseDataLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    public function getRelationships(): GetOrganizationsResponseDataRelationships
    {
        return $this->relationships;
    }

    public function setRelationships(GetOrganizationsResponseDataRelationships $relationships): self
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
