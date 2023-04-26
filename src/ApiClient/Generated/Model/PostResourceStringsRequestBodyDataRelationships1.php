<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringsRequestBodyDataRelationships1
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The `resource` the created resource string should belong to.
     *
     * @var PostResourceStringsRequestBodyDataRelationshipsResource1
     */
    protected $resource;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The `resource` the created resource string should belong to.
     */
    public function getResource(): PostResourceStringsRequestBodyDataRelationshipsResource1
    {
        return $this->resource;
    }

    /**
     * The `resource` the created resource string should belong to.
     */
    public function setResource(PostResourceStringsRequestBodyDataRelationshipsResource1 $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }
}
