<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class TeamMembershipsResponseDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var TeamMembershipsResponseDataRelationshipsLanguage
     */
    protected $language;
    /**
     * @var TeamMembershipsResponseDataRelationshipsTeam
     */
    protected $team;
    /**
     * @var TeamMembershipsResponseDataRelationshipsUser
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getLanguage(): TeamMembershipsResponseDataRelationshipsLanguage
    {
        return $this->language;
    }

    public function setLanguage(TeamMembershipsResponseDataRelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getTeam(): TeamMembershipsResponseDataRelationshipsTeam
    {
        return $this->team;
    }

    public function setTeam(TeamMembershipsResponseDataRelationshipsTeam $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

        return $this;
    }

    public function getUser(): TeamMembershipsResponseDataRelationshipsUser
    {
        return $this->user;
    }

    public function setUser(TeamMembershipsResponseDataRelationshipsUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
