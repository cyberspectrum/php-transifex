<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchProjectsProjectId200ResponseDataItemRelationshipsResources
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Project resources links.
     *
     * @var PatchProjectsProjectId200ResponseDataItemRelationshipsResourcesLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Project resources links.
     */
    public function getLinks(): PatchProjectsProjectId200ResponseDataItemRelationshipsResourcesLinks
    {
        return $this->links;
    }

    /**
     * Project resources links.
     */
    public function setLinks(PatchProjectsProjectId200ResponseDataItemRelationshipsResourcesLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
