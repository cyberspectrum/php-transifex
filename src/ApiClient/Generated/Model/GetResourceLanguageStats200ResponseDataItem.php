<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class GetResourceLanguageStats200ResponseDataItem extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource language stats identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var GetResourceLanguageStats200ResponseDataItemattributes
     */
    protected $attributes;
    /**
     * @var GetResourceLanguageStats200ResponseDataItemlinks
     */
    protected $links;
    /**
     * @var GetResourceLanguageStats200ResponseDataItemrelationships
     */
    protected $relationships;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Resource language stats identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Resource language stats identifier.
     */
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

    public function getAttributes(): GetResourceLanguageStats200ResponseDataItemattributes
    {
        return $this->attributes;
    }

    public function setAttributes(GetResourceLanguageStats200ResponseDataItemattributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    public function getLinks(): GetResourceLanguageStats200ResponseDataItemlinks
    {
        return $this->links;
    }

    public function setLinks(GetResourceLanguageStats200ResponseDataItemlinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    public function getRelationships(): GetResourceLanguageStats200ResponseDataItemrelationships
    {
        return $this->relationships;
    }

    public function setRelationships(GetResourceLanguageStats200ResponseDataItemrelationships $relationships): self
    {
        $this->initialized['relationships'] = true;
        $this->relationships = $relationships;

        return $this;
    }
}
