<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchProjectsProjectId200ResponseDataItemRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PatchProjectsProjectId200ResponseDataItemRelationshipsLanguages
     */
    protected $languages;
    /**
     * @var PatchProjectsProjectId200ResponseDataItemRelationshipsMaintainers
     */
    protected $maintainers;
    /**
     * @var PatchProjectsProjectId200ResponseDataItemRelationshipsOrganization
     */
    protected $organization;
    /**
     * @var PatchProjectsProjectId200ResponseDataItemRelationshipsResources
     */
    protected $resources;
    /**
     * @var PatchProjectsProjectId200ResponseDataItemRelationshipsSourceLanguage
     */
    protected $sourceLanguage;
    /**
     * @var PatchProjectsProjectId200ResponseDataItemRelationshipsTeam
     */
    protected $team;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getLanguages(): PatchProjectsProjectId200ResponseDataItemRelationshipsLanguages
    {
        return $this->languages;
    }

    public function setLanguages(PatchProjectsProjectId200ResponseDataItemRelationshipsLanguages $languages): self
    {
        $this->initialized['languages'] = true;
        $this->languages = $languages;

        return $this;
    }

    public function getMaintainers(): PatchProjectsProjectId200ResponseDataItemRelationshipsMaintainers
    {
        return $this->maintainers;
    }

    public function setMaintainers(PatchProjectsProjectId200ResponseDataItemRelationshipsMaintainers $maintainers): self
    {
        $this->initialized['maintainers'] = true;
        $this->maintainers = $maintainers;

        return $this;
    }

    public function getOrganization(): PatchProjectsProjectId200ResponseDataItemRelationshipsOrganization
    {
        return $this->organization;
    }

    public function setOrganization(PatchProjectsProjectId200ResponseDataItemRelationshipsOrganization $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    public function getResources(): PatchProjectsProjectId200ResponseDataItemRelationshipsResources
    {
        return $this->resources;
    }

    public function setResources(PatchProjectsProjectId200ResponseDataItemRelationshipsResources $resources): self
    {
        $this->initialized['resources'] = true;
        $this->resources = $resources;

        return $this;
    }

    public function getSourceLanguage(): PatchProjectsProjectId200ResponseDataItemRelationshipsSourceLanguage
    {
        return $this->sourceLanguage;
    }

    public function setSourceLanguage(PatchProjectsProjectId200ResponseDataItemRelationshipsSourceLanguage $sourceLanguage): self
    {
        $this->initialized['sourceLanguage'] = true;
        $this->sourceLanguage = $sourceLanguage;

        return $this;
    }

    public function getTeam(): PatchProjectsProjectId200ResponseDataItemRelationshipsTeam
    {
        return $this->team;
    }

    public function setTeam(PatchProjectsProjectId200ResponseDataItemRelationshipsTeam $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

        return $this;
    }
}
