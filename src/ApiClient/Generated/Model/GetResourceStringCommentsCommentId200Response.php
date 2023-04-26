<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringCommentsCommentId200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * a resource string comment object.
     *
     * @var GetResourceStringCommentsCommentId200ResponseData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * a resource string comment object.
     */
    public function getData(): GetResourceStringCommentsCommentId200ResponseData
    {
        return $this->data;
    }

    /**
     * a resource string comment object.
     */
    public function setData(GetResourceStringCommentsCommentId200ResponseData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
