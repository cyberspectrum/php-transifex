<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostProjectsRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The `organization` resource the project should belong to.
     *
     * @var PostProjectsRequestBodyDataRelationshipsOrganization
     */
    protected $organization;
    /**
     * The `language` resource the project is translated from.
     *
     * @var PostProjectsRequestBodyDataRelationshipsSourceLanguage
     */
    protected $sourceLanguage;
    /**
     * The `team` resource the project should belong to.
     *
     * @var PostProjectsRequestBodyDataRelationshipsTeam
     */
    protected $team;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The `organization` resource the project should belong to.
     */
    public function getOrganization(): PostProjectsRequestBodyDataRelationshipsOrganization
    {
        return $this->organization;
    }

    /**
     * The `organization` resource the project should belong to.
     */
    public function setOrganization(PostProjectsRequestBodyDataRelationshipsOrganization $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    /**
     * The `language` resource the project is translated from.
     */
    public function getSourceLanguage(): PostProjectsRequestBodyDataRelationshipsSourceLanguage
    {
        return $this->sourceLanguage;
    }

    /**
     * The `language` resource the project is translated from.
     */
    public function setSourceLanguage(PostProjectsRequestBodyDataRelationshipsSourceLanguage $sourceLanguage): self
    {
        $this->initialized['sourceLanguage'] = true;
        $this->sourceLanguage = $sourceLanguage;

        return $this;
    }

    /**
     * The `team` resource the project should belong to.
     */
    public function getTeam(): PostProjectsRequestBodyDataRelationshipsTeam
    {
        return $this->team;
    }

    /**
     * The `team` resource the project should belong to.
     */
    public function setTeam(PostProjectsRequestBodyDataRelationshipsTeam $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

        return $this;
    }
}
