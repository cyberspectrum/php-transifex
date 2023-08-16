<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceActivityReportsAsyncDownloadsRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Only fetch translation activity for this language.
     *
     * @var PostActivityReportsAsyncDownloadsRequestBodyDataRelationshipsLanguage
     */
    protected $language;
    /**
     * The `resource` whose translation activity you want
     * to make a report for.
     *
     * @var PostResourceActivityReportsAsyncDownloadsRequestBodyDataRelationshipsResource
     */
    protected $resource;
    /**
     * Only fetch translation activity for this user.
     *
     * @var PostActivityReportsAsyncDownloadsRequestBodyDataRelationshipsUser
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Only fetch translation activity for this language.
     */
    public function getLanguage(): PostActivityReportsAsyncDownloadsRequestBodyDataRelationshipsLanguage
    {
        return $this->language;
    }

    /**
     * Only fetch translation activity for this language.
     */
    public function setLanguage(PostActivityReportsAsyncDownloadsRequestBodyDataRelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * The `resource` whose translation activity you want
     * to make a report for.
     */
    public function getResource(): PostResourceActivityReportsAsyncDownloadsRequestBodyDataRelationshipsResource
    {
        return $this->resource;
    }

    /**
     * The `resource` whose translation activity you want
     * to make a report for.
     */
    public function setResource(PostResourceActivityReportsAsyncDownloadsRequestBodyDataRelationshipsResource $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }

    /**
     * Only fetch translation activity for this user.
     */
    public function getUser(): PostActivityReportsAsyncDownloadsRequestBodyDataRelationshipsUser
    {
        return $this->user;
    }

    /**
     * Only fetch translation activity for this user.
     */
    public function setUser(PostActivityReportsAsyncDownloadsRequestBodyDataRelationshipsUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
