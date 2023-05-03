<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringCommentsCommentId200ResponseDatarelationshipsAuthor
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * User id.
     *
     * @var GetResourceStringCommentsCommentId200ResponseDatarelationshipsAuthorData
     */
    protected $data;
    /**
     * User links.
     *
     * @var GetResourceStringCommentsCommentId200ResponseDatarelationshipsAuthorLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * User id.
     */
    public function getData(): GetResourceStringCommentsCommentId200ResponseDatarelationshipsAuthorData
    {
        return $this->data;
    }

    /**
     * User id.
     */
    public function setData(GetResourceStringCommentsCommentId200ResponseDatarelationshipsAuthorData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * User links.
     */
    public function getLinks(): GetResourceStringCommentsCommentId200ResponseDatarelationshipsAuthorLinks
    {
        return $this->links;
    }

    /**
     * User links.
     */
    public function setLinks(GetResourceStringCommentsCommentId200ResponseDatarelationshipsAuthorLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
