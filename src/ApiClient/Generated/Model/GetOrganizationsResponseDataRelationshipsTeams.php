<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetOrganizationsResponseDataRelationshipsTeams
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Team links.
     *
     * @var GetOrganizationsResponseDataRelationshipsTeamsLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Team links.
     */
    public function getLinks(): GetOrganizationsResponseDataRelationshipsTeamsLinks
    {
        return $this->links;
    }

    /**
     * Team links.
     */
    public function setLinks(GetOrganizationsResponseDataRelationshipsTeamsLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
