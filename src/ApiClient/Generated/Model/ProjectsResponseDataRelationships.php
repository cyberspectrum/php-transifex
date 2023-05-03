<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ProjectsResponseDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ProjectsResponseDataRelationshipsLanguages
     */
    protected $languages;
    /**
     * @var ProjectsResponseDataRelationshipsMaintainers
     */
    protected $maintainers;
    /**
     * @var ProjectsResponseDataRelationshipsOrganization
     */
    protected $organization;
    /**
     * @var ProjectsResponseDataRelationshipsResources
     */
    protected $resources;
    /**
     * @var ResponseDataRelationships
     */
    protected $sourceLanguage;
    /**
     * @var ProjectsResponseDataRelationshipsTeam
     */
    protected $team;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getLanguages(): ProjectsResponseDataRelationshipsLanguages
    {
        return $this->languages;
    }

    public function setLanguages(ProjectsResponseDataRelationshipsLanguages $languages): self
    {
        $this->initialized['languages'] = true;
        $this->languages = $languages;

        return $this;
    }

    public function getMaintainers(): ProjectsResponseDataRelationshipsMaintainers
    {
        return $this->maintainers;
    }

    public function setMaintainers(ProjectsResponseDataRelationshipsMaintainers $maintainers): self
    {
        $this->initialized['maintainers'] = true;
        $this->maintainers = $maintainers;

        return $this;
    }

    public function getOrganization(): ProjectsResponseDataRelationshipsOrganization
    {
        return $this->organization;
    }

    public function setOrganization(ProjectsResponseDataRelationshipsOrganization $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    public function getResources(): ProjectsResponseDataRelationshipsResources
    {
        return $this->resources;
    }

    public function setResources(ProjectsResponseDataRelationshipsResources $resources): self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;

        return $this;
    }

    public function getSourceLanguage(): ResponseDataRelationships
    {
        return $this->sourceLanguage;
    }

    public function setSourceLanguage(ResponseDataRelationships $sourceLanguage): self
    {
        $this->initialized['sourceLanguage'] = true;
        $this->sourceLanguage = $sourceLanguage;

        return $this;
    }

    public function getTeam(): ProjectsResponseDataRelationshipsTeam
    {
        return $this->team;
    }

    public function setTeam(ProjectsResponseDataRelationshipsTeam $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

        return $this;
    }
}
