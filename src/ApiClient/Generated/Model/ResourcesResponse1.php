<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResourcesResponse1
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ResourcesResponse
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): ResourcesResponse
    {
        return $this->data;
    }

    public function setData(ResourcesResponse $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
