<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchTeamsTeamId200ResponseDataItem
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Team attributes.
     *
     * @var PatchTeamsTeamId200ResponseDataItemAttributes
     */
    protected $attributes;
    /**
     * Team identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * @var PatchTeamsTeamId200ResponseDataItemLinks
     */
    protected $links;
    /**
     * Team relationships.
     *
     * @var PatchTeamsTeamId200ResponseDataItemRelationships
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
    public function getAttributes(): PatchTeamsTeamId200ResponseDataItemAttributes
    {
        return $this->attributes;
    }

    /**
     * Team attributes.
     */
    public function setAttributes(PatchTeamsTeamId200ResponseDataItemAttributes $attributes): self
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

    public function getLinks(): PatchTeamsTeamId200ResponseDataItemLinks
    {
        return $this->links;
    }

    public function setLinks(PatchTeamsTeamId200ResponseDataItemLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    /**
     * Team relationships.
     */
    public function getRelationships(): PatchTeamsTeamId200ResponseDataItemRelationships
    {
        return $this->relationships;
    }

    /**
     * Team relationships.
     */
    public function setRelationships(PatchTeamsTeamId200ResponseDataItemRelationships $relationships): self
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
