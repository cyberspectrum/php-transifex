<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetTeams200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * List of Project objects.
     *
     * @var TeamsResponseData[]
     */
    protected $data;
    /**
     * Pagination links.
     *
     * @var GetTeams200ResponseLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * List of Project objects.
     *
     * @return TeamsResponseData[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * List of Project objects.
     *
     * @param TeamsResponseData[] $data
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
    public function getLinks(): GetTeams200ResponseLinks
    {
        return $this->links;
    }

    /**
     * Pagination links.
     */
    public function setLinks(GetTeams200ResponseLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
