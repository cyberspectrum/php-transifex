<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStrings200ResponseLinks
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource String collection cursor link.
     *
     * @var string|null
     */
    protected $next;
    /**
     * Resource String collection cursor link.
     *
     * @var string|null
     */
    protected $previous;
    /**
     * Resource String details link.
     *
     * @var string
     */
    protected $self;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Resource String collection cursor link.
     */
    public function getNext(): ?string
    {
        return $this->next;
    }

    /**
     * Resource String collection cursor link.
     */
    public function setNext(?string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;

        return $this;
    }

    /**
     * Resource String collection cursor link.
     */
    public function getPrevious(): ?string
    {
        return $this->previous;
    }

    /**
     * Resource String collection cursor link.
     */
    public function setPrevious(?string $previous): self
    {
        $this->initialized['previous'] = true;
        $this->previous = $previous;

        return $this;
    }

    /**
     * Resource String details link.
     */
    public function getSelf(): string
    {
        return $this->self;
    }

    /**
     * Resource String details link.
     */
    public function setSelf(string $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;

        return $this;
    }
}
