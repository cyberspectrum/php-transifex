<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class GetResourceLanguageStatsResourceLanguageStatsId200Response extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var GetResourceLanguageStatsResourceLanguageStatsId200ResponseData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): GetResourceLanguageStatsResourceLanguageStatsId200ResponseData
    {
        return $this->data;
    }

    public function setData(GetResourceLanguageStatsResourceLanguageStatsId200ResponseData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
