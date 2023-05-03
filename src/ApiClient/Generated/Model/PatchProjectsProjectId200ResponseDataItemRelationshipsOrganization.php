<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchProjectsProjectId200ResponseDataItemRelationshipsOrganization
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Organization data container.
     *
     * @var PatchProjectsProjectId200ResponseDataItemRelationshipsOrganizationData
     */
    protected $data;
    /**
     * @var PatchProjectsProjectId200ResponseDataItemRelationshipsOrganizationLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Organization data container.
     */
    public function getData(): PatchProjectsProjectId200ResponseDataItemRelationshipsOrganizationData
    {
        return $this->data;
    }

    /**
     * Organization data container.
     */
    public function setData(PatchProjectsProjectId200ResponseDataItemRelationshipsOrganizationData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): PatchProjectsProjectId200ResponseDataItemRelationshipsOrganizationLinks
    {
        return $this->links;
    }

    public function setLinks(PatchProjectsProjectId200ResponseDataItemRelationshipsOrganizationLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
