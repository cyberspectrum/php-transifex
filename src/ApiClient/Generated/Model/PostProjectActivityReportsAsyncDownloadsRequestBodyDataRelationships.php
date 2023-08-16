<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostProjectActivityReportsAsyncDownloadsRequestBodyDataRelationships
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
     * The `project` whose translation activity you want
     * to make a report for.
     *
     * @var PostProjectActivityReportsAsyncDownloadsRequestBodyDataRelationshipsProject
     */
    protected $project;
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
     * The `project` whose translation activity you want
     * to make a report for.
     */
    public function getProject(): PostProjectActivityReportsAsyncDownloadsRequestBodyDataRelationshipsProject
    {
        return $this->project;
    }

    /**
     * The `project` whose translation activity you want
     * to make a report for.
     */
    public function setProject(PostProjectActivityReportsAsyncDownloadsRequestBodyDataRelationshipsProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

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
