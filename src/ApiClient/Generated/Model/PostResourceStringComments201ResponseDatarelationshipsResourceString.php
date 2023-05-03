<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringComments201ResponseDatarelationshipsResourceString
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource String data container.
     *
     * @var PostResourceStringComments201ResponseDatarelationshipsResourceStringData
     */
    protected $data;
    /**
     * Resource String related link.
     *
     * @var PostResourceStringComments201ResponseDatarelationshipsResourceStringLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Resource String data container.
     */
    public function getData(): PostResourceStringComments201ResponseDatarelationshipsResourceStringData
    {
        return $this->data;
    }

    /**
     * Resource String data container.
     */
    public function setData(PostResourceStringComments201ResponseDatarelationshipsResourceStringData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Resource String related link.
     */
    public function getLinks(): PostResourceStringComments201ResponseDatarelationshipsResourceStringLinks
    {
        return $this->links;
    }

    /**
     * Resource String related link.
     */
    public function setLinks(PostResourceStringComments201ResponseDatarelationshipsResourceStringLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
