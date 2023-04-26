<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetProjectsProjectIdLanguages200ResponseLinks
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Project language details link.
     *
     * @var string
     */
    protected $self;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Project language details link.
     */
    public function getSelf(): string
    {
        return $this->self;
    }

    /**
     * Project language details link.
     */
    public function setSelf(string $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;

        return $this;
    }
}
