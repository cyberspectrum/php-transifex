<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchTeamsTeamId200ResponseDataItemRelationshipsManagersLinks
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Team-managers list link.
     *
     * @var string
     */
    protected $related;
    /**
     * Team-manager relationship link.
     *
     * @var string
     */
    protected $self;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Team-managers list link.
     */
    public function getRelated(): string
    {
        return $this->related;
    }

    /**
     * Team-managers list link.
     */
    public function setRelated(string $related): self
    {
        $this->initialized['related'] = true;
        $this->related = $related;

        return $this;
    }

    /**
     * Team-manager relationship link.
     */
    public function getSelf(): string
    {
        return $this->self;
    }

    /**
     * Team-manager relationship link.
     */
    public function setSelf(string $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;

        return $this;
    }
}
