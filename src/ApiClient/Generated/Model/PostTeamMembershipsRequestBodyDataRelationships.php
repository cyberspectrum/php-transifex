<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTeamMembershipsRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PostTeamMembershipsRequestBodyDataRelationshipsLanguage
     */
    protected $language;
    /**
     * @var RequestBodyDataRelationshipsTeam
     */
    protected $team;
    /**
     * @var PostTeamMembershipsRequestBodyDataRelationshipsUser
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getLanguage(): PostTeamMembershipsRequestBodyDataRelationshipsLanguage
    {
        return $this->language;
    }

    public function setLanguage(PostTeamMembershipsRequestBodyDataRelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getTeam(): RequestBodyDataRelationshipsTeam
    {
        return $this->team;
    }

    public function setTeam(RequestBodyDataRelationshipsTeam $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

        return $this;
    }

    public function getUser(): PostTeamMembershipsRequestBodyDataRelationshipsUser
    {
        return $this->user;
    }

    public function setUser(PostTeamMembershipsRequestBodyDataRelationshipsUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
