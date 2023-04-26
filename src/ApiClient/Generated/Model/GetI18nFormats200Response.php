<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetI18nFormats200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * List of i18n format objects.
     *
     * @var GetI18nFormats200ResponseDataItems[]
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * List of i18n format objects.
     *
     * @return GetI18nFormats200ResponseDataItems[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * List of i18n format objects.
     *
     * @param GetI18nFormats200ResponseDataItems[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
