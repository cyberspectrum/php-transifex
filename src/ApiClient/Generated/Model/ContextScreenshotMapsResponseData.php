<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ContextScreenshotMapsResponseData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ContextScreenshotMapsResponseDataAttributes
     */
    protected $attributes;
    /**
     * Context screenshot map identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * @var ContextScreenshotMapsResponseDataLinks
     */
    protected $links;
    /**
     * @var ContextScreenshotMapsResponseDataRelationships
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

    public function getAttributes(): ContextScreenshotMapsResponseDataAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(ContextScreenshotMapsResponseDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Context screenshot map identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Context screenshot map identifier.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getLinks(): ContextScreenshotMapsResponseDataLinks
    {
        return $this->links;
    }

    public function setLinks(ContextScreenshotMapsResponseDataLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    public function getRelationships(): ContextScreenshotMapsResponseDataRelationships
    {
        return $this->relationships;
    }

    public function setRelationships(ContextScreenshotMapsResponseDataRelationships $relationships): self
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
