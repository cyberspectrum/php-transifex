<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostContextScreenshotMapsRequestBodyDataRelationshipsResourceString
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource String data container.
     *
     * @var DataData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Resource String data container.
     */
    public function getData(): DataData
    {
        return $this->data;
    }

    /**
     * Resource String data container.
     */
    public function setData(DataData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
