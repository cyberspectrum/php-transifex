<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class TeamsResponseDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Managers object.
     *
     * @var TeamsResponseDataRelationshipsManagers
     */
    protected $managers;
    /**
     * Organization object.
     *
     * @var TeamsResponseDataRelationshipsOrganization
     */
    protected $organization;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Managers object.
     */
    public function getManagers(): TeamsResponseDataRelationshipsManagers
    {
        return $this->managers;
    }

    /**
     * Managers object.
     */
    public function setManagers(TeamsResponseDataRelationshipsManagers $managers): self
    {
        $this->initialized['managers'] = true;
        $this->managers = $managers;

        return $this;
    }

    /**
     * Organization object.
     */
    public function getOrganization(): TeamsResponseDataRelationshipsOrganization
    {
        return $this->organization;
    }

    /**
     * Organization object.
     */
    public function setOrganization(TeamsResponseDataRelationshipsOrganization $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }
}
