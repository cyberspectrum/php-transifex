<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringComments201ResponseDatarelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PostResourceStringComments201ResponseDatarelationshipsAuthor
     */
    protected $author;
    /**
     * @var PostResourceStringComments201ResponseDatarelationshipsLanguage
     */
    protected $language;
    /**
     * @var PostResourceStringComments201ResponseDatarelationshipsResolver|null
     */
    protected $resolver;
    /**
     * @var PostResourceStringComments201ResponseDatarelationshipsResource
     */
    protected $resource;
    /**
     * @var PostResourceStringComments201ResponseDatarelationshipsResourceString
     */
    protected $resourceString;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getAuthor(): PostResourceStringComments201ResponseDatarelationshipsAuthor
    {
        return $this->author;
    }

    public function setAuthor(PostResourceStringComments201ResponseDatarelationshipsAuthor $author): self
    {
        $this->initialized['author'] = true;
        $this->author = $author;

        return $this;
    }

    public function getLanguage(): PostResourceStringComments201ResponseDatarelationshipsLanguage
    {
        return $this->language;
    }

    public function setLanguage(PostResourceStringComments201ResponseDatarelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getResolver(): ?PostResourceStringComments201ResponseDatarelationshipsResolver
    {
        return $this->resolver;
    }

    public function setResolver(?PostResourceStringComments201ResponseDatarelationshipsResolver $resolver): self
    {
        $this->initialized['resolver'] = true;
        $this->resolver = $resolver;

        return $this;
    }

    public function getResource(): PostResourceStringComments201ResponseDatarelationshipsResource
    {
        return $this->resource;
    }

    public function setResource(PostResourceStringComments201ResponseDatarelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }

    public function getResourceString(): PostResourceStringComments201ResponseDatarelationshipsResourceString
    {
        return $this->resourceString;
    }

    public function setResourceString(PostResourceStringComments201ResponseDatarelationshipsResourceString $resourceString): self
    {
        $this->initialized['resourceString'] = true;
        $this->resourceString = $resourceString;

        return $this;
    }
}
