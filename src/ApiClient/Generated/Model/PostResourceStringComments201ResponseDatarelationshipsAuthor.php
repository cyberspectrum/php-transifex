<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringComments201ResponseDatarelationshipsAuthor
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * User id.
     *
     * @var PostResourceStringComments201ResponseDatarelationshipsAuthorData
     */
    protected $data;
    /**
     * User links.
     *
     * @var PostResourceStringComments201ResponseDatarelationshipsAuthorLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * User id.
     */
    public function getData(): PostResourceStringComments201ResponseDatarelationshipsAuthorData
    {
        return $this->data;
    }

    /**
     * User id.
     */
    public function setData(PostResourceStringComments201ResponseDatarelationshipsAuthorData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * User links.
     */
    public function getLinks(): PostResourceStringComments201ResponseDatarelationshipsAuthorLinks
    {
        return $this->links;
    }

    /**
     * User links.
     */
    public function setLinks(PostResourceStringComments201ResponseDatarelationshipsAuthorLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
