<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringsRevisions200ResponseDataItemsRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource object.
     *
     * @var GetResourceStringsRevisions200ResponseDataItemsRelationshipsResourceString
     */
    protected $resourceString;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Resource object.
     */
    public function getResourceString(): GetResourceStringsRevisions200ResponseDataItemsRelationshipsResourceString
    {
        return $this->resourceString;
    }

    /**
     * Resource object.
     */
    public function setResourceString(GetResourceStringsRevisions200ResponseDataItemsRelationshipsResourceString $resourceString): self
    {
        $this->initialized['resourceString'] = true;
        $this->resourceString = $resourceString;

        return $this;
    }
}
