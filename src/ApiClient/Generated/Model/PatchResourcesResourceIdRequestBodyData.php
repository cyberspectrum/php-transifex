<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchResourcesResourceIdRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource multable attributes.
     *
     * @var PatchResourcesResourceIdRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * Resource identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Resource modifiable relationships.
     *
     * @var PatchResourcesResourceIdRequestBodyDataRelationships
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
     * Resource multable attributes.
     */
    public function getAttributes(): PatchResourcesResourceIdRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    /**
     * Resource multable attributes.
     */
    public function setAttributes(PatchResourcesResourceIdRequestBodyDataAttributes $attributes): self
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
     * Resource modifiable relationships.
     */
    public function getRelationships(): PatchResourcesResourceIdRequestBodyDataRelationships
    {
        return $this->relationships;
    }

    /**
     * Resource modifiable relationships.
     */
    public function setRelationships(PatchResourcesResourceIdRequestBodyDataRelationships $relationships): self
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
