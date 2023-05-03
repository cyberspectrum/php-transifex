<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetProjectWebhooks200ResponseLinks
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Project Webhook cursor link.
     *
     * @var string|null
     */
    protected $next;
    /**
     * Project Webhook cursor link.
     *
     * @var string|null
     */
    protected $previous;
    /**
     * Project Webhook details link.
     *
     * @var string
     */
    protected $self;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Project Webhook cursor link.
     */
    public function getNext(): ?string
    {
        return $this->next;
    }

    /**
     * Project Webhook cursor link.
     */
    public function setNext(?string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;

        return $this;
    }

    /**
     * Project Webhook cursor link.
     */
    public function getPrevious(): ?string
    {
        return $this->previous;
    }

    /**
     * Project Webhook cursor link.
     */
    public function setPrevious(?string $previous): self
    {
        $this->initialized['previous'] = true;
        $this->previous = $previous;

        return $this;
    }

    /**
     * Project Webhook details link.
     */
    public function getSelf(): string
    {
        return $this->self;
    }

    /**
     * Project Webhook details link.
     */
    public function setSelf(string $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;

        return $this;
    }
}
