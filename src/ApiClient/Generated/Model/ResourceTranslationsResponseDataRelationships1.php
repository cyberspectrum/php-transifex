<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResourceTranslationsResponseDataRelationships1
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Language object.
     *
     * @var ResourceResponseRelationshipsLanguage
     */
    protected $language;
    /**
     * User object.
     *
     * @var ResourceTranslationsResponseDataRelationships|null
     */
    protected $proofreader;
    /**
     * Resource object.
     *
     * @var ResourceResponseRelationshipsResource
     */
    protected $resource;
    /**
     * Resource String object.
     *
     * @var ResourceTranslationsResponseDataRelationshipsResourceString
     */
    protected $resourceString;
    /**
     * User object.
     *
     * @var ResourceTranslationsResponseDataRelationships|null
     */
    protected $reviewer;
    /**
     * User object.
     *
     * @var ResourceTranslationsResponseDataRelationships|null
     */
    protected $translator;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Language object.
     */
    public function getLanguage(): ResourceResponseRelationshipsLanguage
    {
        return $this->language;
    }

    /**
     * Language object.
     */
    public function setLanguage(ResourceResponseRelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * User object.
     */
    public function getProofreader(): ?ResourceTranslationsResponseDataRelationships
    {
        return $this->proofreader;
    }

    /**
     * User object.
     */
    public function setProofreader(?ResourceTranslationsResponseDataRelationships $proofreader): self
    {
        $this->initialized['proofreader'] = true;
        $this->proofreader = $proofreader;

        return $this;
    }

    /**
     * Resource object.
     */
    public function getResource(): ResourceResponseRelationshipsResource
    {
        return $this->resource;
    }

    /**
     * Resource object.
     */
    public function setResource(ResourceResponseRelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }

    /**
     * Resource String object.
     */
    public function getResourceString(): ResourceTranslationsResponseDataRelationshipsResourceString
    {
        return $this->resourceString;
    }

    /**
     * Resource String object.
     */
    public function setResourceString(ResourceTranslationsResponseDataRelationshipsResourceString $resourceString): self
    {
        $this->initialized['resourceString'] = true;
        $this->resourceString = $resourceString;

        return $this;
    }

    /**
     * User object.
     */
    public function getReviewer(): ?ResourceTranslationsResponseDataRelationships
    {
        return $this->reviewer;
    }

    /**
     * User object.
     */
    public function setReviewer(?ResourceTranslationsResponseDataRelationships $reviewer): self
    {
        $this->initialized['reviewer'] = true;
        $this->reviewer = $reviewer;

        return $this;
    }

    /**
     * User object.
     */
    public function getTranslator(): ?ResourceTranslationsResponseDataRelationships
    {
        return $this->translator;
    }

    /**
     * User object.
     */
    public function setTranslator(?ResourceTranslationsResponseDataRelationships $translator): self
    {
        $this->initialized['translator'] = true;
        $this->translator = $translator;

        return $this;
    }
}
