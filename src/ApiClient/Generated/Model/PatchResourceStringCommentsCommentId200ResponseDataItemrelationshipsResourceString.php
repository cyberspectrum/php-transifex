<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceString
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource String data container.
     *
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceStringData
     */
    protected $data;
    /**
     * Resource String related link.
     *
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceStringLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Resource String data container.
     */
    public function getData(): PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceStringData
    {
        return $this->data;
    }

    /**
     * Resource String data container.
     */
    public function setData(PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceStringData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Resource String related link.
     */
    public function getLinks(): PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceStringLinks
    {
        return $this->links;
    }

    /**
     * Resource String related link.
     */
    public function setLinks(PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceStringLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
