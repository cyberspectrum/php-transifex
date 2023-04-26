<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTmxAsyncDownloadsRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The `language` to compile the tmx for.
     *
     * @var PostTmxAsyncDownloadsRequestBodyDataRelationshipsLanguage
     */
    protected $language;
    /**
     * The `project` to compile the tmx for.
     *
     * @var PostTmxAsyncDownloadsRequestBodyDataRelationshipsProject
     */
    protected $project;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The `language` to compile the tmx for.
     */
    public function getLanguage(): PostTmxAsyncDownloadsRequestBodyDataRelationshipsLanguage
    {
        return $this->language;
    }

    /**
     * The `language` to compile the tmx for.
     */
    public function setLanguage(PostTmxAsyncDownloadsRequestBodyDataRelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * The `project` to compile the tmx for.
     */
    public function getProject(): PostTmxAsyncDownloadsRequestBodyDataRelationshipsProject
    {
        return $this->project;
    }

    /**
     * The `project` to compile the tmx for.
     */
    public function setProject(PostTmxAsyncDownloadsRequestBodyDataRelationshipsProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }
}
