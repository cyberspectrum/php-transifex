<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceTranslations200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * List of resource translation objects.
     *
     * @var ResourceTranslationsResponseData[]
     */
    protected $data;
    /**
     * List of included resource string objects.
     *
     * @var ResourceResponse[]
     */
    protected $included;
    /**
     * Pagination links.
     *
     * @var GetResourceTranslations200ResponseLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * List of resource translation objects.
     *
     * @return ResourceTranslationsResponseData[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * List of resource translation objects.
     *
     * @param ResourceTranslationsResponseData[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * List of included resource string objects.
     *
     * @return ResourceResponse[]
     */
    public function getIncluded(): array
    {
        return $this->included;
    }

    /**
     * List of included resource string objects.
     *
     * @param ResourceResponse[] $included
     */
    public function setIncluded(array $included): self
    {
        $this->initialized['included'] = true;
        $this->included = $included;

        return $this;
    }

    /**
     * Pagination links.
     */
    public function getLinks(): GetResourceTranslations200ResponseLinks
    {
        return $this->links;
    }

    /**
     * Pagination links.
     */
    public function setLinks(GetResourceTranslations200ResponseLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
