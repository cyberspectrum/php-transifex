<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class TmxAsyncResponseDataRelationships
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
     * @var ResponseDataRelationshipsProject
     */
    protected $project;

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

    public function getProject(): ResponseDataRelationshipsProject
    {
        return $this->project;
    }

    public function setProject(ResponseDataRelationshipsProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }
}
