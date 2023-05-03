<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTeamsRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The `organization` the created team should belong to.
     *
     * @var PostTeamsRequestBodyDataRelationshipsOrganization
     */
    protected $organization;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The `organization` the created team should belong to.
     */
    public function getOrganization(): PostTeamsRequestBodyDataRelationshipsOrganization
    {
        return $this->organization;
    }

    /**
     * The `organization` the created team should belong to.
     */
    public function setOrganization(PostTeamsRequestBodyDataRelationshipsOrganization $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }
}
