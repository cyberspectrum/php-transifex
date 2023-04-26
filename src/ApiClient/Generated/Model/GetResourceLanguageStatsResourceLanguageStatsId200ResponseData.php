<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class GetResourceLanguageStatsResourceLanguageStatsId200ResponseData extends ArrayObject
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
     * @var GetResourceLanguageStatsResourceLanguageStatsId200ResponseDataattributes
     */
    protected $attributes;
    /**
     * @var GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatalinks
     */
    protected $links;
    /**
     * @var GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationships
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

    public function getAttributes(): GetResourceLanguageStatsResourceLanguageStatsId200ResponseDataattributes
    {
        return $this->attributes;
    }

    public function setAttributes(GetResourceLanguageStatsResourceLanguageStatsId200ResponseDataattributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    public function getLinks(): GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatalinks
    {
        return $this->links;
    }

    public function setLinks(GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatalinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    public function getRelationships(): GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationships
    {
        return $this->relationships;
    }

    public function setRelationships(GetResourceLanguageStatsResourceLanguageStatsId200ResponseDatarelationships $relationships): self
    {
        $this->initialized['relationships'] = true;
        $this->relationships = $relationships;

        return $this;
    }
}
