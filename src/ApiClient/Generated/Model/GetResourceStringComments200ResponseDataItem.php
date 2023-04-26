<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class GetResourceStringComments200ResponseDataItem extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type = 'resource_string_comments';
    /**
     * @var GetResourceStringComments200ResponseDataItemattributes
     */
    protected $attributes;
    /**
     * @var GetResourceStringComments200ResponseDataItemlinks
     */
    protected $links;
    /**
     * Resource String Comment relationships.
     *
     * @var GetResourceStringComments200ResponseDataItemrelationships
     */
    protected $relationships;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

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

    public function getAttributes(): GetResourceStringComments200ResponseDataItemattributes
    {
        return $this->attributes;
    }

    public function setAttributes(GetResourceStringComments200ResponseDataItemattributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    public function getLinks(): GetResourceStringComments200ResponseDataItemlinks
    {
        return $this->links;
    }

    public function setLinks(GetResourceStringComments200ResponseDataItemlinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    /**
     * Resource String Comment relationships.
     */
    public function getRelationships(): GetResourceStringComments200ResponseDataItemrelationships
    {
        return $this->relationships;
    }

    /**
     * Resource String Comment relationships.
     */
    public function setRelationships(GetResourceStringComments200ResponseDataItemrelationships $relationships): self
    {
        $this->initialized['relationships'] = true;
        $this->relationships = $relationships;

        return $this;
    }
}
