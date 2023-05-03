<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class TmxAsyncDownloadsResponseData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var TmxAsyncDownloadsResponseDataAttributes
     */
    protected $attributes;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var TmxAsyncDownloadsResponseDataLinks
     */
    protected $links;
    /**
     * @var TmxAsyncResponseDataRelationships
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

    public function getAttributes(): TmxAsyncDownloadsResponseDataAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(TmxAsyncDownloadsResponseDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
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

    public function getLinks(): TmxAsyncDownloadsResponseDataLinks
    {
        return $this->links;
    }

    public function setLinks(TmxAsyncDownloadsResponseDataLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    public function getRelationships(): TmxAsyncResponseDataRelationships
    {
        return $this->relationships;
    }

    public function setRelationships(TmxAsyncResponseDataRelationships $relationships): self
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
