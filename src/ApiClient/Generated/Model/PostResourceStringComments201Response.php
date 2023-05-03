<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringComments201Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PostResourceStringComments201ResponseData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): PostResourceStringComments201ResponseData
    {
        return $this->data;
    }

    public function setData(PostResourceStringComments201ResponseData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
