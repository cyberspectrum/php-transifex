<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchTeamsTeamId200ResponseDataItemRelationshipsOrganization
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Organization data container.
     *
     * @var PatchTeamsTeamId200ResponseDataItemRelationshipsOrganizationData
     */
    protected $data;
    /**
     * @var PatchTeamsTeamId200ResponseDataItemRelationshipsOrganizationLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Organization data container.
     */
    public function getData(): PatchTeamsTeamId200ResponseDataItemRelationshipsOrganizationData
    {
        return $this->data;
    }

    /**
     * Organization data container.
     */
    public function setData(PatchTeamsTeamId200ResponseDataItemRelationshipsOrganizationData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): PatchTeamsTeamId200ResponseDataItemRelationshipsOrganizationLinks
    {
        return $this->links;
    }

    public function setLinks(PatchTeamsTeamId200ResponseDataItemRelationshipsOrganizationLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
