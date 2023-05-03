<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringComments200ResponseDataItemrelationshipsAuthor
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * User id.
     *
     * @var GetResourceStringComments200ResponseDataItemrelationshipsAuthorData
     */
    protected $data;
    /**
     * User links.
     *
     * @var GetResourceStringComments200ResponseDataItemrelationshipsAuthorLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * User id.
     */
    public function getData(): GetResourceStringComments200ResponseDataItemrelationshipsAuthorData
    {
        return $this->data;
    }

    /**
     * User id.
     */
    public function setData(GetResourceStringComments200ResponseDataItemrelationshipsAuthorData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * User links.
     */
    public function getLinks(): GetResourceStringComments200ResponseDataItemrelationshipsAuthorLinks
    {
        return $this->links;
    }

    /**
     * User links.
     */
    public function setLinks(GetResourceStringComments200ResponseDataItemrelationshipsAuthorLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
