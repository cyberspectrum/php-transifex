<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTmxAsyncUploadsRequestBodyDataRelationshipsLanguage
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Language data container.
     *
     * @var DataRelationshipsData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Language data container.
     */
    public function getData(): DataRelationshipsData
    {
        return $this->data;
    }

    /**
     * Language data container.
     */
    public function setData(DataRelationshipsData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
