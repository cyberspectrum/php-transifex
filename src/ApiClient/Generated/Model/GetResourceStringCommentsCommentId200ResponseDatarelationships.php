<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringCommentsCommentId200ResponseDatarelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetResourceStringCommentsCommentId200ResponseDatarelationshipsAuthor
     */
    protected $author;
    /**
     * @var GetResourceStringCommentsCommentId200ResponseDatarelationshipsLanguage
     */
    protected $language;
    /**
     * @var GetResourceStringCommentsCommentId200ResponseDatarelationshipsResolver|null
     */
    protected $resolver;
    /**
     * @var GetResourceStringCommentsCommentId200ResponseDatarelationshipsResource
     */
    protected $resource;
    /**
     * @var GetResourceStringCommentsCommentId200ResponseDatarelationshipsResourceString
     */
    protected $resourceString;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getAuthor(): GetResourceStringCommentsCommentId200ResponseDatarelationshipsAuthor
    {
        return $this->author;
    }

    public function setAuthor(GetResourceStringCommentsCommentId200ResponseDatarelationshipsAuthor $author): self
    {
        $this->initialized['author'] = true;
        $this->author = $author;

        return $this;
    }

    public function getLanguage(): GetResourceStringCommentsCommentId200ResponseDatarelationshipsLanguage
    {
        return $this->language;
    }

    public function setLanguage(GetResourceStringCommentsCommentId200ResponseDatarelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getResolver(): ?GetResourceStringCommentsCommentId200ResponseDatarelationshipsResolver
    {
        return $this->resolver;
    }

    public function setResolver(?GetResourceStringCommentsCommentId200ResponseDatarelationshipsResolver $resolver): self
    {
        $this->initialized['resolver'] = true;
        $this->resolver = $resolver;

        return $this;
    }

    public function getResource(): GetResourceStringCommentsCommentId200ResponseDatarelationshipsResource
    {
        return $this->resource;
    }

    public function setResource(GetResourceStringCommentsCommentId200ResponseDatarelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }

    public function getResourceString(): GetResourceStringCommentsCommentId200ResponseDatarelationshipsResourceString
    {
        return $this->resourceString;
    }

    public function setResourceString(GetResourceStringCommentsCommentId200ResponseDatarelationshipsResourceString $resourceString): self
    {
        $this->initialized['resourceString'] = true;
        $this->resourceString = $resourceString;

        return $this;
    }
}
