<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringsRevisions200ResponseDataItems
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetResourceStringsRevisions200ResponseDataItemsAttributes
     */
    protected $attributes;
    /**
     * Resource Strings Revisions identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Resource Strings Revisions relationships.
     *
     * @var GetResourceStringsRevisions200ResponseDataItemsRelationships
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

    public function getAttributes(): GetResourceStringsRevisions200ResponseDataItemsAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(GetResourceStringsRevisions200ResponseDataItemsAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Resource Strings Revisions identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Resource Strings Revisions identifier.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Resource Strings Revisions relationships.
     */
    public function getRelationships(): GetResourceStringsRevisions200ResponseDataItemsRelationships
    {
        return $this->relationships;
    }

    /**
     * Resource Strings Revisions relationships.
     */
    public function setRelationships(GetResourceStringsRevisions200ResponseDataItemsRelationships $relationships): self
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
