<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTeamActivityReportsAsyncDownloadsRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PostActivityReportsAsyncDownloadsRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * @var PostTeamActivityReportsAsyncDownloadsRequestBodyDataRelationships
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

    public function getAttributes(): PostActivityReportsAsyncDownloadsRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(PostActivityReportsAsyncDownloadsRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    public function getRelationships(): PostTeamActivityReportsAsyncDownloadsRequestBodyDataRelationships
    {
        return $this->relationships;
    }

    public function setRelationships(PostTeamActivityReportsAsyncDownloadsRequestBodyDataRelationships $relationships): self
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
