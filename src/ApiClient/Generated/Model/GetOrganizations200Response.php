<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetOrganizations200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * List of orgnanization objects.
     *
     * @var GetOrganizationsResponseData[]
     */
    protected $data;
    /**
     * Pagination links.
     *
     * @var GetOrganizations200ResponseLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * List of orgnanization objects.
     *
     * @return GetOrganizationsResponseData[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * List of orgnanization objects.
     *
     * @param GetOrganizationsResponseData[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Pagination links.
     */
    public function getLinks(): GetOrganizations200ResponseLinks
    {
        return $this->links;
    }

    /**
     * Pagination links.
     */
    public function setLinks(GetOrganizations200ResponseLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
