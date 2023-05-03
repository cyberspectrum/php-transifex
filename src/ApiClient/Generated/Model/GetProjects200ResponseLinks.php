<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetProjects200ResponseLinks
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Project cursor link.
     *
     * @var string|null
     */
    protected $next;
    /**
     * Project cursor link.
     *
     * @var string|null
     */
    protected $previous;
    /**
     * Project details link.
     *
     * @var string
     */
    protected $self;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Project cursor link.
     */
    public function getNext(): ?string
    {
        return $this->next;
    }

    /**
     * Project cursor link.
     */
    public function setNext(?string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;

        return $this;
    }

    /**
     * Project cursor link.
     */
    public function getPrevious(): ?string
    {
        return $this->previous;
    }

    /**
     * Project cursor link.
     */
    public function setPrevious(?string $previous): self
    {
        $this->initialized['previous'] = true;
        $this->previous = $previous;

        return $this;
    }

    /**
     * Project details link.
     */
    public function getSelf(): string
    {
        return $this->self;
    }

    /**
     * Project details link.
     */
    public function setSelf(string $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;

        return $this;
    }
}
