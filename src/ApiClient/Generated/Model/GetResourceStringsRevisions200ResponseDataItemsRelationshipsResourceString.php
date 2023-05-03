<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringsRevisions200ResponseDataItemsRelationshipsResourceString
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetResourceStringsRevisions200ResponseDataItemsRelationshipsResourceStringData
     */
    protected $data;
    /**
     * @var GetResourceStringsRevisions200ResponseDataItemsRelationshipsResourceStringLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): GetResourceStringsRevisions200ResponseDataItemsRelationshipsResourceStringData
    {
        return $this->data;
    }

    public function setData(GetResourceStringsRevisions200ResponseDataItemsRelationshipsResourceStringData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): GetResourceStringsRevisions200ResponseDataItemsRelationshipsResourceStringLinks
    {
        return $this->links;
    }

    public function setLinks(GetResourceStringsRevisions200ResponseDataItemsRelationshipsResourceStringLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
