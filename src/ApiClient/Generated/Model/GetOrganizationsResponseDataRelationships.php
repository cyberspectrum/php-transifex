<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetOrganizationsResponseDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetOrganizationsResponseDataRelationshipsProjects
     */
    protected $projects;
    /**
     * @var GetOrganizationsResponseDataRelationshipsTeams
     */
    protected $teams;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getProjects(): GetOrganizationsResponseDataRelationshipsProjects
    {
        return $this->projects;
    }

    public function setProjects(GetOrganizationsResponseDataRelationshipsProjects $projects): self
    {
        $this->initialized['projects'] = true;
        $this->projects = $projects;

        return $this;
    }

    public function getTeams(): GetOrganizationsResponseDataRelationshipsTeams
    {
        return $this->teams;
    }

    public function setTeams(GetOrganizationsResponseDataRelationshipsTeams $teams): self
    {
        $this->initialized['teams'] = true;
        $this->teams = $teams;

        return $this;
    }
}
