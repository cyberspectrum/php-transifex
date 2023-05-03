<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringComments200ResponseLinks
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Link to the next page of results.
     *
     * @var string|null
     */
    protected $next;
    /**
     * Link to the previous page of results.
     *
     * @var string|null
     */
    protected $previous;
    /**
     * Link to the current page of results.
     *
     * @var string
     */
    protected $self;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Link to the next page of results.
     */
    public function getNext(): ?string
    {
        return $this->next;
    }

    /**
     * Link to the next page of results.
     */
    public function setNext(?string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;

        return $this;
    }

    /**
     * Link to the previous page of results.
     */
    public function getPrevious(): ?string
    {
        return $this->previous;
    }

    /**
     * Link to the previous page of results.
     */
    public function setPrevious(?string $previous): self
    {
        $this->initialized['previous'] = true;
        $this->previous = $previous;

        return $this;
    }

    /**
     * Link to the current page of results.
     */
    public function getSelf(): string
    {
        return $this->self;
    }

    /**
     * Link to the current page of results.
     */
    public function setSelf(string $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;

        return $this;
    }
}
