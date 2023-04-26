<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetTeamMembershipsResponseIncludedItemattributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The username.
     *
     * @var string
     */
    protected $username;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The username.
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * The username.
     */
    public function setUsername(string $username): self
    {
        $this->initialized['username'] = true;
        $this->username = $username;

        return $this;
    }
}
