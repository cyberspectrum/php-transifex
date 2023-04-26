<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceAsyncMergesRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The resource that will be merged to its parent.
     *
     * @var PostResourceAsyncMergesRequestBodyDataRelationshipsResource
     */
    protected $resource;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The resource that will be merged to its parent.
     */
    public function getResource(): PostResourceAsyncMergesRequestBodyDataRelationshipsResource
    {
        return $this->resource;
    }

    /**
     * The resource that will be merged to its parent.
     */
    public function setResource(PostResourceAsyncMergesRequestBodyDataRelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }
}
