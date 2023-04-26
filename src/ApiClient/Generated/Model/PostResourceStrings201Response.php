<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStrings201Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ResourceResponse[]
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @return ResourceResponse[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ResourceResponse[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
