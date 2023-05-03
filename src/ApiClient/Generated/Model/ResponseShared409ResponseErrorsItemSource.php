<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResponseShared409ResponseErrorsItemSource
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var string
     */
    protected $pointer;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getPointer(): string
    {
        return $this->pointer;
    }

    public function setPointer(string $pointer): self
    {
        $this->initialized['pointer'] = true;
        $this->pointer = $pointer;

        return $this;
    }
}
