<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchProjectsProjectId200ResponseDataItemRelationshipsMaintainersLinks
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Project maintainers details link.
     *
     * @var string
     */
    protected $related;
    /**
     * Project maintainers relationship link.
     *
     * @var string
     */
    protected $self;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Project maintainers details link.
     */
    public function getRelated(): string
    {
        return $this->related;
    }

    /**
     * Project maintainers details link.
     */
    public function setRelated(string $related): self
    {
        $this->initialized['related'] = true;
        $this->related = $related;

        return $this;
    }

    /**
     * Project maintainers relationship link.
     */
    public function getSelf(): string
    {
        return $this->self;
    }

    /**
     * Project maintainers relationship link.
     */
    public function setSelf(string $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;

        return $this;
    }
}
