<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringsAsyncDownloadsRequestBodyDataRelationshipsResource
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource data container.
     *
     * @var DataRelationshipsData2
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Resource data container.
     */
    public function getData(): DataRelationshipsData2
    {
        return $this->data;
    }

    /**
     * Resource data container.
     */
    public function setData(DataRelationshipsData2 $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
