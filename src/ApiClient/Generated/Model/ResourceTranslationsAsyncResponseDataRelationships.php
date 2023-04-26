<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResourceTranslationsAsyncResponseDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ResponseDataRelationships
     */
    protected $language;
    /**
     * @var ResourceAsyncResponseDataRelationshipsResource
     */
    protected $resource;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getLanguage(): ResponseDataRelationships
    {
        return $this->language;
    }

    public function setLanguage(ResponseDataRelationships $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getResource(): ResourceAsyncResponseDataRelationshipsResource
    {
        return $this->resource;
    }

    public function setResource(ResourceAsyncResponseDataRelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }
}
