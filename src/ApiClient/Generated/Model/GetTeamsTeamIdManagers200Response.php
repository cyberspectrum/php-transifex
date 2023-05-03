<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetTeamsTeamIdManagers200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetIdResponseDataItem[]
     */
    protected $data;
    /**
     * @var GetTeamsTeamIdManagers200ResponseLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @return GetIdResponseDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetIdResponseDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): GetTeamsTeamIdManagers200ResponseLinks
    {
        return $this->links;
    }

    public function setLinks(GetTeamsTeamIdManagers200ResponseLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
