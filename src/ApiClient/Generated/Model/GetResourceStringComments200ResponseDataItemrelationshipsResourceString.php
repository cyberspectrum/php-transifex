<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringComments200ResponseDataItemrelationshipsResourceString
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource String data container.
     *
     * @var GetResourceStringComments200ResponseDataItemrelationshipsResourceStringData
     */
    protected $data;
    /**
     * Resource String related link.
     *
     * @var GetResourceStringComments200ResponseDataItemrelationshipsResourceStringLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Resource String data container.
     */
    public function getData(): GetResourceStringComments200ResponseDataItemrelationshipsResourceStringData
    {
        return $this->data;
    }

    /**
     * Resource String data container.
     */
    public function setData(GetResourceStringComments200ResponseDataItemrelationshipsResourceStringData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Resource String related link.
     */
    public function getLinks(): GetResourceStringComments200ResponseDataItemrelationshipsResourceStringLinks
    {
        return $this->links;
    }

    /**
     * Resource String related link.
     */
    public function setLinks(GetResourceStringComments200ResponseDataItemrelationshipsResourceStringLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
