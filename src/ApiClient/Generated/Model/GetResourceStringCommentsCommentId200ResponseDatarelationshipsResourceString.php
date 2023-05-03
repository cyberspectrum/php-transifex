<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringCommentsCommentId200ResponseDatarelationshipsResourceString
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource String data container.
     *
     * @var GetResourceStringCommentsCommentId200ResponseDatarelationshipsResourceStringData
     */
    protected $data;
    /**
     * Resource String related link.
     *
     * @var GetResourceStringCommentsCommentId200ResponseDatarelationshipsResourceStringLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Resource String data container.
     */
    public function getData(): GetResourceStringCommentsCommentId200ResponseDatarelationshipsResourceStringData
    {
        return $this->data;
    }

    /**
     * Resource String data container.
     */
    public function setData(GetResourceStringCommentsCommentId200ResponseDatarelationshipsResourceStringData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Resource String related link.
     */
    public function getLinks(): GetResourceStringCommentsCommentId200ResponseDatarelationshipsResourceStringLinks
    {
        return $this->links;
    }

    /**
     * Resource String related link.
     */
    public function setLinks(GetResourceStringCommentsCommentId200ResponseDatarelationshipsResourceStringLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
