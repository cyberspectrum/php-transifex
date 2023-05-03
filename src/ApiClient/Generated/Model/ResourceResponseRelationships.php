<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResourceResponseRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * User object.
     *
     * @var ResourceResponseRelationshipsCommitter
     */
    protected $committer;
    /**
     * Language object.
     *
     * @var ResourceResponseRelationshipsLanguage
     */
    protected $language;
    /**
     * Resource object.
     *
     * @var ResourceResponseRelationshipsResource
     */
    protected $resource;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * User object.
     */
    public function getCommitter(): ResourceResponseRelationshipsCommitter
    {
        return $this->committer;
    }

    /**
     * User object.
     */
    public function setCommitter(ResourceResponseRelationshipsCommitter $committer): self
    {
        $this->initialized['committer'] = true;
        $this->committer = $committer;

        return $this;
    }

    /**
     * Language object.
     */
    public function getLanguage(): ResourceResponseRelationshipsLanguage
    {
        return $this->language;
    }

    /**
     * Language object.
     */
    public function setLanguage(ResourceResponseRelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * Resource object.
     */
    public function getResource(): ResourceResponseRelationshipsResource
    {
        return $this->resource;
    }

    /**
     * Resource object.
     */
    public function setResource(ResourceResponseRelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }
}
