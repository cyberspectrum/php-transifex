<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchTeamsTeamId200ResponseDataItemRelationshipsManagers
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PatchTeamsTeamId200ResponseDataItemRelationshipsManagersLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getLinks(): PatchTeamsTeamId200ResponseDataItemRelationshipsManagersLinks
    {
        return $this->links;
    }

    public function setLinks(PatchTeamsTeamId200ResponseDataItemRelationshipsManagersLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
