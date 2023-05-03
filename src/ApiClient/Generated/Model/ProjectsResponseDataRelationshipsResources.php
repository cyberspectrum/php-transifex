<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ProjectsResponseDataRelationshipsResources
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Project resources links.
     *
     * @var ProjectsResponseDataRelationshipsResourcesLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Project resources links.
     */
    public function getLinks(): ProjectsResponseDataRelationshipsResourcesLinks
    {
        return $this->links;
    }

    /**
     * Project resources links.
     */
    public function setLinks(ProjectsResponseDataRelationshipsResourcesLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
