<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchResourceStringCommentsCommentId200ResponseDataItemrelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsAuthor
     */
    protected $author;
    /**
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsLanguage
     */
    protected $language;
    /**
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResolver|null
     */
    protected $resolver;
    /**
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResource
     */
    protected $resource;
    /**
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceString
     */
    protected $resourceString;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getAuthor(): PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsAuthor
    {
        return $this->author;
    }

    public function setAuthor(PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsAuthor $author): self
    {
        $this->initialized['author'] = true;
        $this->author = $author;

        return $this;
    }

    public function getLanguage(): PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsLanguage
    {
        return $this->language;
    }

    public function setLanguage(PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getResolver(): ?PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResolver
    {
        return $this->resolver;
    }

    public function setResolver(?PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResolver $resolver): self
    {
        $this->initialized['resolver'] = true;
        $this->resolver = $resolver;

        return $this;
    }

    public function getResource(): PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResource
    {
        return $this->resource;
    }

    public function setResource(PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }

    public function getResourceString(): PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceString
    {
        return $this->resourceString;
    }

    public function setResourceString(PatchResourceStringCommentsCommentId200ResponseDataItemrelationshipsResourceString $resourceString): self
    {
        $this->initialized['resourceString'] = true;
        $this->resourceString = $resourceString;

        return $this;
    }
}
