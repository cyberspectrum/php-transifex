<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchProjectsProjectId200ResponseDataItemRelationshipsTeam
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Team data container.
     *
     * @var PatchProjectsProjectId200ResponseDataItemRelationshipsTeamData
     */
    protected $data;
    /**
     * @var PatchProjectsProjectId200ResponseDataItemRelationshipsTeamLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Team data container.
     */
    public function getData(): PatchProjectsProjectId200ResponseDataItemRelationshipsTeamData
    {
        return $this->data;
    }

    /**
     * Team data container.
     */
    public function setData(PatchProjectsProjectId200ResponseDataItemRelationshipsTeamData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): PatchProjectsProjectId200ResponseDataItemRelationshipsTeamLinks
    {
        return $this->links;
    }

    public function setLinks(PatchProjectsProjectId200ResponseDataItemRelationshipsTeamLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
