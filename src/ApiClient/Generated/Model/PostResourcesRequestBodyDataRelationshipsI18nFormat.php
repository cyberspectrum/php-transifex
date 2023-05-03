<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourcesRequestBodyDataRelationshipsI18nFormat
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * I18n Format identifier object.
     *
     * @var ResourcesDataRelationshipsI18nFormatData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * I18n Format identifier object.
     */
    public function getData(): ResourcesDataRelationshipsI18nFormatData
    {
        return $this->data;
    }

    /**
     * I18n Format identifier object.
     */
    public function setData(ResourcesDataRelationshipsI18nFormatData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
