<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResourceStringsAsyncUploadsResponseData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ResourceStringsAsyncUploadsResponseDataAttributes
     */
    protected $attributes;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var ResourceStringsAsyncUploadsResponseDataLinks
     */
    protected $links;
    /**
     * @var ResourceStringsAsyncResponseDataRelationships
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

    public function getAttributes(): ResourceStringsAsyncUploadsResponseDataAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(ResourceStringsAsyncUploadsResponseDataAttributes $attributes): self
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

    public function getLinks(): ResourceStringsAsyncUploadsResponseDataLinks
    {
        return $this->links;
    }

    public function setLinks(ResourceStringsAsyncUploadsResponseDataLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    public function getRelationships(): ResourceStringsAsyncResponseDataRelationships
    {
        return $this->relationships;
    }

    public function setRelationships(ResourceStringsAsyncResponseDataRelationships $relationships): self
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
