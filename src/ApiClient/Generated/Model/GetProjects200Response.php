<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetProjects200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * List of Project objects.
     *
     * @var ProjectsResponseData[]
     */
    protected $data;
    /**
     * Pagination links.
     *
     * @var GetProjects200ResponseLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * List of Project objects.
     *
     * @return ProjectsResponseData[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * List of Project objects.
     *
     * @param ProjectsResponseData[] $data
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
    public function getLinks(): GetProjects200ResponseLinks
    {
        return $this->links;
    }

    /**
     * Pagination links.
     */
    public function setLinks(GetProjects200ResponseLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
