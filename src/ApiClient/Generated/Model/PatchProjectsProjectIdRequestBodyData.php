<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchProjectsProjectIdRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PatchProjectsProjectIdRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * Project identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * @var PatchProjectsProjectIdRequestBodyDataRelationships
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

    public function getAttributes(): PatchProjectsProjectIdRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(PatchProjectsProjectIdRequestBodyDataAttributes $attributes): self
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

    public function getRelationships(): PatchProjectsProjectIdRequestBodyDataRelationships
    {
        return $this->relationships;
    }

    public function setRelationships(PatchProjectsProjectIdRequestBodyDataRelationships $relationships): self
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
