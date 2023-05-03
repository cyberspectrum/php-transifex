<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceTranslationsAsyncUploadsRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The language for which a translation file is uploaded.
     *
     * @var PostResourceTranslationsAsyncUploadsRequestBodyDataRelationshipsLanguage
     */
    protected $language;
    /**
     * The `resource` for which a translation file is uploaded.
     *
     * @var PostResourceTranslationsAsyncUploadsRequestBodyDataRelationshipsResource
     */
    protected $resource;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The language for which a translation file is uploaded.
     */
    public function getLanguage(): PostResourceTranslationsAsyncUploadsRequestBodyDataRelationshipsLanguage
    {
        return $this->language;
    }

    /**
     * The language for which a translation file is uploaded.
     */
    public function setLanguage(PostResourceTranslationsAsyncUploadsRequestBodyDataRelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * The `resource` for which a translation file is uploaded.
     */
    public function getResource(): PostResourceTranslationsAsyncUploadsRequestBodyDataRelationshipsResource
    {
        return $this->resource;
    }

    /**
     * The `resource` for which a translation file is uploaded.
     */
    public function setResource(PostResourceTranslationsAsyncUploadsRequestBodyDataRelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }
}
