<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostActivityReportsAsyncDownloadsRequestBodyDataRelationshipsUser
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * User id.
     *
     * @var DataRelationshipsData1
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * User id.
     */
    public function getData(): DataRelationshipsData1
    {
        return $this->data;
    }

    /**
     * User id.
     */
    public function setData(DataRelationshipsData1 $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
