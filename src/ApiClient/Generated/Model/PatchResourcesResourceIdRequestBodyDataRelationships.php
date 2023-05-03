<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchResourcesResourceIdRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The base `resource` that this `resource` is a branch of.
     *
     * @var ResourcesRequestBodyDataRelationshipsBase|null
     */
    protected $base;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The base `resource` that this `resource` is a branch of.
     */
    public function getBase(): ?ResourcesRequestBodyDataRelationshipsBase
    {
        return $this->base;
    }

    /**
     * The base `resource` that this `resource` is a branch of.
     */
    public function setBase(?ResourcesRequestBodyDataRelationshipsBase $base): self
    {
        $this->initialized['base'] = true;
        $this->base = $base;

        return $this;
    }
}
