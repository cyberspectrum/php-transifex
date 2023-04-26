<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchResourceStringCommentsCommentIdRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Resource String Comment mutable attributes.
     *
     * @var PatchResourceStringCommentsCommentIdRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type = 'resource_string_comments';

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Resource String Comment mutable attributes.
     */
    public function getAttributes(): PatchResourceStringCommentsCommentIdRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    /**
     * Resource String Comment mutable attributes.
     */
    public function setAttributes(PatchResourceStringCommentsCommentIdRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

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