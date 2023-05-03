<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class GetResourceLanguageStats200ResponseLinks extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var string
     */
    protected $last;
    /**
     * @var string
     */
    protected $next;
    /**
     * @var string
     */
    protected $self;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getLast(): string
    {
        return $this->last;
    }

    public function setLast(string $last): self
    {
        $this->initialized['last'] = true;
        $this->last = $last;

        return $this;
    }

    public function getNext(): string
    {
        return $this->next;
    }

    public function setNext(string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;

        return $this;
    }

    public function getSelf(): string
    {
        return $this->self;
    }

    public function setSelf(string $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;

        return $this;
    }
}
