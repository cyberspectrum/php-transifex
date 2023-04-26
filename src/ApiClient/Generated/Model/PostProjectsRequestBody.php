<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostProjectsRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Create project body request details.
     *
     * @var PostProjectsRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Create project body request details.
     */
    public function getData(): PostProjectsRequestBodyData
    {
        return $this->data;
    }

    /**
     * Create project body request details.
     */
    public function setData(PostProjectsRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
