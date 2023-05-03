<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringsAsyncDownloadsRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The `resource` for which a source file is downloaded.
     *
     * @var PostResourceStringsAsyncDownloadsRequestBodyDataRelationshipsResource
     */
    protected $resource;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The `resource` for which a source file is downloaded.
     */
    public function getResource(): PostResourceStringsAsyncDownloadsRequestBodyDataRelationshipsResource
    {
        return $this->resource;
    }

    /**
     * The `resource` for which a source file is downloaded.
     */
    public function setResource(PostResourceStringsAsyncDownloadsRequestBodyDataRelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }
}
