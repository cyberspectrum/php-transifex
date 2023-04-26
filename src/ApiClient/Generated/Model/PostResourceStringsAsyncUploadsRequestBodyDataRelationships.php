<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringsAsyncUploadsRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The `resource` source upload should belong to.
     *
     * @var PostResourceStringsAsyncUploadsRequestBodyDataRelationshipsResource
     */
    protected $resource;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The `resource` source upload should belong to.
     */
    public function getResource(): PostResourceStringsAsyncUploadsRequestBodyDataRelationshipsResource
    {
        return $this->resource;
    }

    /**
     * The `resource` source upload should belong to.
     */
    public function setResource(PostResourceStringsAsyncUploadsRequestBodyDataRelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }
}
