<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchContextScreenshotsContextScreenshotIdRequestBodyData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PatchContextScreenshotsContextScreenshotIdRequestBodyDataAttributes
     */
    protected $attributes;
    /**
     * Context screenshot identifier.
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

    public function getAttributes(): PatchContextScreenshotsContextScreenshotIdRequestBodyDataAttributes
    {
        return $this->attributes;
    }

    public function setAttributes(PatchContextScreenshotsContextScreenshotIdRequestBodyDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Context screenshot identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Context screenshot identifier.
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
