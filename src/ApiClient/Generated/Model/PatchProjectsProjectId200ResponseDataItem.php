<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchProjectsProjectId200ResponseDataItem
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Project attributes.
     *
     * @var PatchProjectsProjectId200ResponseDataItemAttributes
     */
    protected $attributes;
    /**
     * Project identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Project self link.
     *
     * @var PatchProjectsProjectId200ResponseDataItemLinks
     */
    protected $links;
    /**
     * Project relationships.
     *
     * @var PatchProjectsProjectId200ResponseDataItemRelationships
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
     * Project attributes.
     */
    public function getAttributes(): PatchProjectsProjectId200ResponseDataItemAttributes
    {
        return $this->attributes;
    }

    /**
     * Project attributes.
     */
    public function setAttributes(PatchProjectsProjectId200ResponseDataItemAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Project identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Project identifier.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Project self link.
     */
    public function getLinks(): PatchProjectsProjectId200ResponseDataItemLinks
    {
        return $this->links;
    }

    /**
     * Project self link.
     */
    public function setLinks(PatchProjectsProjectId200ResponseDataItemLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    /**
     * Project relationships.
     */
    public function getRelationships(): PatchProjectsProjectId200ResponseDataItemRelationships
    {
        return $this->relationships;
    }

    /**
     * Project relationships.
     */
    public function setRelationships(PatchProjectsProjectId200ResponseDataItemRelationships $relationships): self
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
