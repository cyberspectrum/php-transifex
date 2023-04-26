<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResponseShared409ResponseErrorsItem
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $detail;
    /**
     * @var ResponseShared409ResponseErrorsItemSource
     */
    protected $source;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $title;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    public function getDetail(): string
    {
        return $this->detail;
    }

    public function setDetail(string $detail): self
    {
        $this->initialized['detail'] = true;
        $this->detail = $detail;

        return $this;
    }

    public function getSource(): ResponseShared409ResponseErrorsItemSource
    {
        return $this->source;
    }

    public function setSource(ResponseShared409ResponseErrorsItemSource $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }
}
