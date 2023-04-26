<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetTeamMembershipsTeamMembershipId200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var TeamMembershipsResponseData
     */
    protected $data;
    /**
     * List of included user objects.
     *
     * @var GetTeamMembershipsResponseIncludedItem[]
     */
    protected $included;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): TeamMembershipsResponseData
    {
        return $this->data;
    }

    public function setData(TeamMembershipsResponseData $data): self
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
}
