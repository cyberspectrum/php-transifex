<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringCommentsCommentId200ResponseDatarelationshipsResolver
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * User id.
     *
     * @var GetResourceStringCommentsCommentId200ResponseDatarelationshipsResolverData
     */
    protected $data;
    /**
     * User links.
     *
     * @var GetResourceStringCommentsCommentId200ResponseDatarelationshipsResolverLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * User id.
     */
    public function getData(): GetResourceStringCommentsCommentId200ResponseDatarelationshipsResolverData
    {
        return $this->data;
    }

    /**
     * User id.
     */
    public function setData(GetResourceStringCommentsCommentId200ResponseDatarelationshipsResolverData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * User links.
     */
    public function getLinks(): GetResourceStringCommentsCommentId200ResponseDatarelationshipsResolverLinks
    {
        return $this->links;
    }

    /**
     * User links.
     */
    public function setLinks(GetResourceStringCommentsCommentId200ResponseDatarelationshipsResolverLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
