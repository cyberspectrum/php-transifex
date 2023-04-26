<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetProjectsProjectIdRelationshipsMaintainers200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var DataRelationshipsData1[]
     */
    protected $data;
    /**
     * @var GetProjectsProjectIdRelationshipsMaintainers200ResponseLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @return DataRelationshipsData1[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param DataRelationshipsData1[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): GetProjectsProjectIdRelationshipsMaintainers200ResponseLinks
    {
        return $this->links;
    }

    public function setLinks(GetProjectsProjectIdRelationshipsMaintainers200ResponseLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
