<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class GetResourceLanguageStats200Response extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetResourceLanguageStats200ResponseDataItem[]
     */
    protected $data;
    /**
     * @var GetResourceLanguageStats200ResponseLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @return GetResourceLanguageStats200ResponseDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param GetResourceLanguageStats200ResponseDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): GetResourceLanguageStats200ResponseLinks
    {
        return $this->links;
    }

    public function setLinks(GetResourceLanguageStats200ResponseLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
