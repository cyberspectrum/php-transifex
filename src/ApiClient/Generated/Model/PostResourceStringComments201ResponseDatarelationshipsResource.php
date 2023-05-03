<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringComments201ResponseDatarelationshipsResource
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource data container.
     *
     * @var PostResourceStringComments201ResponseDatarelationshipsResourceData
     */
    protected $data;
    /**
     * Resource related link.
     *
     * @var PostResourceStringComments201ResponseDatarelationshipsResourceLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Resource data container.
     */
    public function getData(): PostResourceStringComments201ResponseDatarelationshipsResourceData
    {
        return $this->data;
    }

    /**
     * Resource data container.
     */
    public function setData(PostResourceStringComments201ResponseDatarelationshipsResourceData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Resource related link.
     */
    public function getLinks(): PostResourceStringComments201ResponseDatarelationshipsResourceLinks
    {
        return $this->links;
    }

    /**
     * Resource related link.
     */
    public function setLinks(PostResourceStringComments201ResponseDatarelationshipsResourceLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
