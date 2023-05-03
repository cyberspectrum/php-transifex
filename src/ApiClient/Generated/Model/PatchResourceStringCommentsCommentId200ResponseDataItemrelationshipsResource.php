<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResource
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource data container.
     *
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceData
     */
    protected $data;
    /**
     * Resource related link.
     *
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Resource data container.
     */
    public function getData(): PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceData
    {
        return $this->data;
    }

    /**
     * Resource data container.
     */
    public function setData(PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Resource related link.
     */
    public function getLinks(): PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceLinks
    {
        return $this->links;
    }

    /**
     * Resource related link.
     */
    public function setLinks(PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
