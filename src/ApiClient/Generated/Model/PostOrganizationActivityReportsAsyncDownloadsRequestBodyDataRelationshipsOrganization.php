<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostOrganizationActivityReportsAsyncDownloadsRequestBodyDataRelationshipsOrganization
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Organization data container.
     *
     * @var OrganizationDataRelationshipsOrganizationData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Organization data container.
     */
    public function getData(): OrganizationDataRelationshipsOrganizationData
    {
        return $this->data;
    }

    /**
     * Organization data container.
     */
    public function setData(OrganizationDataRelationshipsOrganizationData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
