<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResourceAsyncMergesResponseDataRelationships1
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ResourceAsyncMergesResponseDataRelationships
     */
    protected $base;
    /**
     * @var ResourceAsyncMergesResponseDataRelationships
     */
    protected $head;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getBase(): ResourceAsyncMergesResponseDataRelationships
    {
        return $this->base;
    }

    public function setBase(ResourceAsyncMergesResponseDataRelationships $base): self
    {
        $this->initialized['base'] = true;
        $this->base = $base;

        return $this;
    }

    public function getHead(): ResourceAsyncMergesResponseDataRelationships
    {
        return $this->head;
    }

    public function setHead(ResourceAsyncMergesResponseDataRelationships $head): self
    {
        $this->initialized['head'] = true;
        $this->head = $head;

        return $this;
    }
}
