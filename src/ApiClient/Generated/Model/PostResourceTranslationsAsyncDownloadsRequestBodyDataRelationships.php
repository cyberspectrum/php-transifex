<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The language for which a translation file is downloaded.
     *
     * @var PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationshipsLanguage
     */
    protected $language;
    /**
     * The `resource` for which a translation file is downloaded.
     *
     * @var PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationshipsResource
     */
    protected $resource;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The language for which a translation file is downloaded.
     */
    public function getLanguage(): PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationshipsLanguage
    {
        return $this->language;
    }

    /**
     * The language for which a translation file is downloaded.
     */
    public function setLanguage(PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * The `resource` for which a translation file is downloaded.
     */
    public function getResource(): PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationshipsResource
    {
        return $this->resource;
    }

    /**
     * The `resource` for which a translation file is downloaded.
     */
    public function setResource(PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }
}
