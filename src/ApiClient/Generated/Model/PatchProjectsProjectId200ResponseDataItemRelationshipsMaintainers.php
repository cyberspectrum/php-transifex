<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchProjectsProjectId200ResponseDataItemRelationshipsMaintainers
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Project maintainers links.
     *
     * @var PatchProjectsProjectId200ResponseDataItemRelationshipsMaintainersLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Project maintainers links.
     */
    public function getLinks(): PatchProjectsProjectId200ResponseDataItemRelationshipsMaintainersLinks
    {
        return $this->links;
    }

    /**
     * Project maintainers links.
     */
    public function setLinks(PatchProjectsProjectId200ResponseDataItemRelationshipsMaintainersLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
