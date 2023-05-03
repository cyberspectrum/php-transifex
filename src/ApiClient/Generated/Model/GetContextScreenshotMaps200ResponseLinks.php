<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetContextScreenshotMaps200ResponseLinks
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Context screenshot cursor link.
     *
     * @var string|null
     */
    protected $next;
    /**
     * Context screenshot cursor link.
     *
     * @var string|null
     */
    protected $previous;
    /**
     * Context screenshot map details link.
     *
     * @var string
     */
    protected $self;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Context screenshot cursor link.
     */
    public function getNext(): ?string
    {
        return $this->next;
    }

    /**
     * Context screenshot cursor link.
     */
    public function setNext(?string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;

        return $this;
    }

    /**
     * Context screenshot cursor link.
     */
    public function getPrevious(): ?string
    {
        return $this->previous;
    }

    /**
     * Context screenshot cursor link.
     */
    public function setPrevious(?string $previous): self
    {
        $this->initialized['previous'] = true;
        $this->previous = $previous;

        return $this;
    }

    /**
     * Context screenshot map details link.
     */
    public function getSelf(): string
    {
        return $this->self;
    }

    /**
     * Context screenshot map details link.
     */
    public function setSelf(string $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;

        return $this;
    }
}
