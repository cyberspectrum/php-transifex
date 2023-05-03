<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ProjectsResponseDataRelationshipsTeam
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Team data container.
     *
     * @var DataRelationshipsTeamData
     */
    protected $data;
    /**
     * @var ProjectsResponseRelationshipsTeamLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Team data container.
     */
    public function getData(): DataRelationshipsTeamData
    {
        return $this->data;
    }

    /**
     * Team data container.
     */
    public function setData(DataRelationshipsTeamData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): ProjectsResponseRelationshipsTeamLinks
    {
        return $this->links;
    }

    public function setLinks(ProjectsResponseRelationshipsTeamLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
