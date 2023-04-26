<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringComments200ResponseDataItemrelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetResourceStringComments200ResponseDataItemrelationshipsAuthor
     */
    protected $author;
    /**
     * @var GetResourceStringComments200ResponseDataItemrelationshipsLanguage
     */
    protected $language;
    /**
     * @var GetResourceStringComments200ResponseDataItemrelationshipsResolver|null
     */
    protected $resolver;
    /**
     * @var GetResourceStringComments200ResponseDataItemrelationshipsResource
     */
    protected $resource;
    /**
     * @var GetResourceStringComments200ResponseDataItemrelationshipsResourceString
     */
    protected $resourceString;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getAuthor(): GetResourceStringComments200ResponseDataItemrelationshipsAuthor
    {
        return $this->author;
    }

    public function setAuthor(GetResourceStringComments200ResponseDataItemrelationshipsAuthor $author): self
    {
        $this->initialized['author'] = true;
        $this->author = $author;

        return $this;
    }

    public function getLanguage(): GetResourceStringComments200ResponseDataItemrelationshipsLanguage
    {
        return $this->language;
    }

    public function setLanguage(GetResourceStringComments200ResponseDataItemrelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getResolver(): ?GetResourceStringComments200ResponseDataItemrelationshipsResolver
    {
        return $this->resolver;
    }

    public function setResolver(?GetResourceStringComments200ResponseDataItemrelationshipsResolver $resolver): self
    {
        $this->initialized['resolver'] = true;
        $this->resolver = $resolver;

        return $this;
    }

    public function getResource(): GetResourceStringComments200ResponseDataItemrelationshipsResource
    {
        return $this->resource;
    }

    public function setResource(GetResourceStringComments200ResponseDataItemrelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }

    public function getResourceString(): GetResourceStringComments200ResponseDataItemrelationshipsResourceString
    {
        return $this->resourceString;
    }

    public function setResourceString(GetResourceStringComments200ResponseDataItemrelationshipsResourceString $resourceString): self
    {
        $this->initialized['resourceString'] = true;
        $this->resourceString = $resourceString;

        return $this;
    }
}
