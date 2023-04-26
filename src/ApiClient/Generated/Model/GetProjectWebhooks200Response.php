<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetProjectWebhooks200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * List of project webhook objects.
     *
     * @var ProjectWebhooksResponseData[]
     */
    protected $data;
    /**
     * Pagination links.
     *
     * @var GetProjectWebhooks200ResponseLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * List of project webhook objects.
     *
     * @return ProjectWebhooksResponseData[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * List of project webhook objects.
     *
     * @param ProjectWebhooksResponseData[] $data
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
    public function getLinks(): GetProjectWebhooks200ResponseLinks
    {
        return $this->links;
    }

    /**
     * Pagination links.
     */
    public function setLinks(GetProjectWebhooks200ResponseLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
