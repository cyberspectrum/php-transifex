<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ProjectWebhooksResponseDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Project object.
     *
     * @var ProjectResponseRelationshipsProject
     */
    protected $project;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Project object.
     */
    public function getProject(): ProjectResponseRelationshipsProject
    {
        return $this->project;
    }

    /**
     * Project object.
     */
    public function setProject(ProjectResponseRelationshipsProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }
}
