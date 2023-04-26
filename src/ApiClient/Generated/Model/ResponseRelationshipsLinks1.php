<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResponseRelationshipsLinks1
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * User details link.
     *
     * @var string
     */
    protected $related;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * User details link.
     */
    public function getRelated(): string
    {
        return $this->related;
    }

    /**
     * User details link.
     */
    public function setRelated(string $related): self
    {
        $this->initialized['related'] = true;
        $this->related = $related;

        return $this;
    }
}
