<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResourceResponseRelationshipsResource
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource data container.
     *
     * @var DataRelationshipsData2
     */
    protected $data;
    /**
     * Resource related link.
     *
     * @var ResourceResponseRelationshipsResourceLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Resource data container.
     */
    public function getData(): DataRelationshipsData2
    {
        return $this->data;
    }

    /**
     * Resource data container.
     */
    public function setData(DataRelationshipsData2 $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Resource related link.
     */
    public function getLinks(): ResourceResponseRelationshipsResourceLinks
    {
        return $this->links;
    }

    /**
     * Resource related link.
     */
    public function setLinks(ResourceResponseRelationshipsResourceLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
