<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResolver
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * User id.
     *
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResolverData
     */
    protected $data;
    /**
     * User links.
     *
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResolverLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * User id.
     */
    public function getData(): PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResolverData
    {
        return $this->data;
    }

    /**
     * User id.
     */
    public function setData(PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResolverData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * User links.
     */
    public function getLinks(): PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResolverLinks
    {
        return $this->links;
    }

    /**
     * User links.
     */
    public function setLinks(PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResolverLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
