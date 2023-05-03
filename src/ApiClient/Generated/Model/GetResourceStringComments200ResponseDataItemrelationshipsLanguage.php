<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringComments200ResponseDataItemrelationshipsLanguage
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Language data container.
     *
     * @var GetResourceStringComments200ResponseDataItemrelationshipsLanguageData
     */
    protected $data;
    /**
     * Language related link.
     *
     * @var GetResourceStringComments200ResponseDataItemrelationshipsLanguageLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Language data container.
     */
    public function getData(): GetResourceStringComments200ResponseDataItemrelationshipsLanguageData
    {
        return $this->data;
    }

    /**
     * Language data container.
     */
    public function setData(GetResourceStringComments200ResponseDataItemrelationshipsLanguageData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Language related link.
     */
    public function getLinks(): GetResourceStringComments200ResponseDataItemrelationshipsLanguageLinks
    {
        return $this->links;
    }

    /**
     * Language related link.
     */
    public function setLinks(GetResourceStringComments200ResponseDataItemrelationshipsLanguageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
