<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostContextScreenshotMapsRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PostContextScreenshotMapsRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * Context screenshot map parent relationships.
     *
     * @var PostContextScreenshotMapsRequestBodyDataRelationships
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

    public function getAttributes(): PostContextScreenshotMapsRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(PostContextScreenshotMapsRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Context screenshot map parent relationships.
     */
    public function getRelationships(): PostContextScreenshotMapsRequestBodyDataRelationships
    {
        return $this->relationships;
    }

    /**
     * Context screenshot map parent relationships.
     */
    public function setRelationships(PostContextScreenshotMapsRequestBodyDataRelationships $relationships): self
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
