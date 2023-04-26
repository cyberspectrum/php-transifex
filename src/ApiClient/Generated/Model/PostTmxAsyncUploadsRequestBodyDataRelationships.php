<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTmxAsyncUploadsRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The language that should be parsed.
     *
     * @var PostTmxAsyncUploadsRequestBodyDataRelationshipsLanguage
     */
    protected $language;
    /**
     * The project the TMX upload should belong to.
     *
     * @var PostTmxAsyncUploadsRequestBodyDataRelationshipsProject
     */
    protected $project;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The language that should be parsed.
     */
    public function getLanguage(): PostTmxAsyncUploadsRequestBodyDataRelationshipsLanguage
    {
        return $this->language;
    }

    /**
     * The language that should be parsed.
     */
    public function setLanguage(PostTmxAsyncUploadsRequestBodyDataRelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * The project the TMX upload should belong to.
     */
    public function getProject(): PostTmxAsyncUploadsRequestBodyDataRelationshipsProject
    {
        return $this->project;
    }

    /**
     * The project the TMX upload should belong to.
     */
    public function setProject(PostTmxAsyncUploadsRequestBodyDataRelationshipsProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }
}
