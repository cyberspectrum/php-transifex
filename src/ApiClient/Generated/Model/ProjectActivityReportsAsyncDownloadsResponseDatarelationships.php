<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class ProjectActivityReportsAsyncDownloadsResponseDatarelationships extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage
     */
    protected $language;
    /**
     * @var ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsProject
     */
    protected $project;
    /**
     * @var ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsUser
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getLanguage(): ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage
    {
        return $this->language;
    }

    public function setLanguage(ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getProject(): ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsProject
    {
        return $this->project;
    }

    public function setProject(ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }

    public function getUser(): ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsUser
    {
        return $this->user;
    }

    public function setUser(ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
