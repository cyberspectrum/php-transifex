<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchTeamsTeamId200ResponseDataItemRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Managers object.
     *
     * @var PatchTeamsTeamId200ResponseDataItemRelationshipsManagers
     */
    protected $managers;
    /**
     * Organization object.
     *
     * @var PatchTeamsTeamId200ResponseDataItemRelationshipsOrganization
     */
    protected $organization;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Managers object.
     */
    public function getManagers(): PatchTeamsTeamId200ResponseDataItemRelationshipsManagers
    {
        return $this->managers;
    }

    /**
     * Managers object.
     */
    public function setManagers(PatchTeamsTeamId200ResponseDataItemRelationshipsManagers $managers): self
    {
        $this->initialized['managers'] = true;
        $this->managers = $managers;

        return $this;
    }

    /**
     * Organization object.
     */
    public function getOrganization(): PatchTeamsTeamId200ResponseDataItemRelationshipsOrganization
    {
        return $this->organization;
    }

    /**
     * Organization object.
     */
    public function setOrganization(PatchTeamsTeamId200ResponseDataItemRelationshipsOrganization $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }
}
