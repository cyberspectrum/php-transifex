<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetOrganizationsResponseDataRelationshipsTeamsLinks
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Organization teams relationship link.
     *
     * @var string
     */
    protected $related;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Organization teams relationship link.
     */
    public function getRelated(): string
    {
        return $this->related;
    }

    /**
     * Organization teams relationship link.
     */
    public function setRelated(string $related): self
    {
        $this->initialized['related'] = true;
        $this->related = $related;

        return $this;
    }
}
