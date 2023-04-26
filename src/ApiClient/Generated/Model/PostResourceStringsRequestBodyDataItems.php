<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringsRequestBodyDataItems
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PostResourceStringsRequestBodyDataAttributes1
     */
    protected $attributes;
    /**
     * Resource String parent relationships.
     *
     * @var PostResourceStringsRequestBodyDataRelationships1
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

    public function getAttributes(): PostResourceStringsRequestBodyDataAttributes1
    {
        return $this->attributes;
    }

    public function setAttributes(PostResourceStringsRequestBodyDataAttributes1 $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Resource String parent relationships.
     */
    public function getRelationships(): PostResourceStringsRequestBodyDataRelationships1
    {
        return $this->relationships;
    }

    /**
     * Resource String parent relationships.
     */
    public function setRelationships(PostResourceStringsRequestBodyDataRelationships1 $relationships): self
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
