<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsLanguage
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Language data container.
     *
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsLanguageData
     */
    protected $data;
    /**
     * Language related link.
     *
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsLanguageLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Language data container.
     */
    public function getData(): PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsLanguageData
    {
        return $this->data;
    }

    /**
     * Language data container.
     */
    public function setData(PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsLanguageData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Language related link.
     */
    public function getLinks(): PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsLanguageLinks
    {
        return $this->links;
    }

    /**
     * Language related link.
     */
    public function setLinks(PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsLanguageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
