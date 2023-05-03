<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ContextScreenshotsResponseData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ContextScreenshotsResponseDataAttributes
     */
    protected $attributes;
    /**
     * Context screenshot identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * @var ContextScreenshotsResponseDataLinks
     */
    protected $links;
    /**
     * @var ContextScreenshotsResponseDataRelationships
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

    public function getAttributes(): ContextScreenshotsResponseDataAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(ContextScreenshotsResponseDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Context screenshot identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Context screenshot identifier.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getLinks(): ContextScreenshotsResponseDataLinks
    {
        return $this->links;
    }

    public function setLinks(ContextScreenshotsResponseDataLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    public function getRelationships(): ContextScreenshotsResponseDataRelationships
    {
        return $this->relationships;
    }

    public function setRelationships(ContextScreenshotsResponseDataRelationships $relationships): self
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
