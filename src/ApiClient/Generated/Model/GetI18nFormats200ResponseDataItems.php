<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetI18nFormats200ResponseDataItems
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * I18n format attributes.
     *
     * @var GetI18nFormats200ResponseDataItemsAttributes
     */
    protected $attributes;
    /**
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

    /**
     * I18n format attributes.
     */
    public function getAttributes(): GetI18nFormats200ResponseDataItemsAttributes
    {
        return $this->attributes;
    }

    /**
     * I18n format attributes.
     */
    public function setAttributes(GetI18nFormats200ResponseDataItemsAttributes $attributes): self
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
