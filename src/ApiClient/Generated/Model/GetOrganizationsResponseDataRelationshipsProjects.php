<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetOrganizationsResponseDataRelationshipsProjects
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Project links.
     *
     * @var GetOrganizationsResponseDataRelationshipsProjectsLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Project links.
     */
    public function getLinks(): GetOrganizationsResponseDataRelationshipsProjectsLinks
    {
        return $this->links;
    }

    /**
     * Project links.
     */
    public function setLinks(GetOrganizationsResponseDataRelationshipsProjectsLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
