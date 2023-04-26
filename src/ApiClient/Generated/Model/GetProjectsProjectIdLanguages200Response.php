<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetProjectsProjectIdLanguages200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetLanguagesResponseData[]
     */
    protected $data;
    /**
     * Project languages links.
     *
     * @var GetProjectsProjectIdLanguages200ResponseLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @return GetLanguagesResponseData[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetLanguagesResponseData[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Project languages links.
     */
    public function getLinks(): GetProjectsProjectIdLanguages200ResponseLinks
    {
        return $this->links;
    }

    /**
     * Project languages links.
     */
    public function setLinks(GetProjectsProjectIdLanguages200ResponseLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
