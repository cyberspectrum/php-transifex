<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTmxAsyncDownloadsRequestBodyDataRelationshipsProject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Project data container.
     *
     * @var DataRelationshipsProjectData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Project data container.
     */
    public function getData(): DataRelationshipsProjectData
    {
        return $this->data;
    }

    /**
     * Project data container.
     */
    public function setData(DataRelationshipsProjectData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
