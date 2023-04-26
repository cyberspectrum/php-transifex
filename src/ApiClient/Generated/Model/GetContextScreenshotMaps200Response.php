<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetContextScreenshotMaps200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ContextScreenshotMapsResponseData[]
     */
    protected $data;
    /**
     * Pagination links.
     *
     * @var GetContextScreenshotMaps200ResponseLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @return ContextScreenshotMapsResponseData[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ContextScreenshotMapsResponseData[] $data
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
    public function getLinks(): GetContextScreenshotMaps200ResponseLinks
    {
        return $this->links;
    }

    /**
     * Pagination links.
     */
    public function setLinks(GetContextScreenshotMaps200ResponseLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
