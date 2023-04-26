<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringCommentsCommentId200ResponseDatalinks
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource String details link.
     *
     * @var string
     */
    protected $self;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Resource String details link.
     */
    public function getSelf(): string
    {
        return $this->self;
    }

    /**
     * Resource String details link.
     */
    public function setSelf(string $self): self
    {
        $this->initialized['self'] = true;
        $this->self = $self;

        return $this;
    }
}
