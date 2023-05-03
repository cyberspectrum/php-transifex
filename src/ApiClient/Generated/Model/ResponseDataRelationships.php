<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResponseDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Language data container.
     *
     * @var DataRelationshipsData
     */
    protected $data;
    /**
     * Language related link.
     *
     * @var ResponseRelationshipsLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Language data container.
     */
    public function getData(): DataRelationshipsData
    {
        return $this->data;
    }

    /**
     * Language data container.
     */
    public function setData(DataRelationshipsData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Language related link.
     */
    public function getLinks(): ResponseRelationshipsLinks
    {
        return $this->links;
    }

    /**
     * Language related link.
     */
    public function setLinks(ResponseRelationshipsLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
