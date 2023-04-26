<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchResourceTranslationsResourceTranslationIdRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PatchResourceTranslationsRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * Resource Translation identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getAttributes(): PatchResourceTranslationsRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(PatchResourceTranslationsRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Resource Translation identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Resource Translation identifier.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
