<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetTeamMemberships200ResponseLinks
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var string|null
     */
    protected $next;
    /**
     * @var string|null
     */
    protected $previous;
    /**
     * @var string
     */
    protected $self;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getNext(): ?string
    {
        return $this->next;
    }

    public function setNext(?string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;

        return $this;
    }

    public function getPrevious(): ?string
    {
        return $this->previous;
    }

    public function setPrevious(?string $previous): self
    {
        $this->initialized['previous'] = true;
        $this->previous = $previous;

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
