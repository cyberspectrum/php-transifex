<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringComments200ResponseDataItemrelationshipsResolver
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * User id.
     *
     * @var GetResourceStringComments200ResponseDataItemrelationshipsResolverData
     */
    protected $data;
    /**
     * User links.
     *
     * @var GetResourceStringComments200ResponseDataItemrelationshipsResolverLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * User id.
     */
    public function getData(): GetResourceStringComments200ResponseDataItemrelationshipsResolverData
    {
        return $this->data;
    }

    /**
     * User id.
     */
    public function setData(GetResourceStringComments200ResponseDataItemrelationshipsResolverData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * User links.
     */
    public function getLinks(): GetResourceStringComments200ResponseDataItemrelationshipsResolverLinks
    {
        return $this->links;
    }

    /**
     * User links.
     */
    public function setLinks(GetResourceStringComments200ResponseDataItemrelationshipsResolverLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
