<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetTeamMemberships200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var TeamMembershipsResponseData[]
     */
    protected $data;
    /**
     * List of included user objects.
     *
     * @var GetTeamMembershipsResponseIncludedItem[]
     */
    protected $included;
    /**
     * @var GetTeamMemberships200ResponseLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @return TeamMembershipsResponseData[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param TeamMembershipsResponseData[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * List of included user objects.
     *
     * @return GetTeamMembershipsResponseIncludedItem[]
     */
    public function getIncluded(): array
    {
        return $this->included;
    }

    /**
     * List of included user objects.
     *
     * @param GetTeamMembershipsResponseIncludedItem[] $included
     */
    public function setIncluded(array $included): self
    {
        $this->initialized['included'] = true;
        $this->included = $included;

        return $this;
    }

    public function getLinks(): GetTeamMemberships200ResponseLinks
    {
        return $this->links;
    }

    public function setLinks(GetTeamMemberships200ResponseLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
