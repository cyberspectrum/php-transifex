<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetLanguagesResponseData
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Language attributes.
     *
     * @var GetLanguagesResponseDataAttributes
     */
    protected $attributes;
    /**
     * Language identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Language links.
     *
     * @var GetLanguagesResponseDataLinks
     */
    protected $links;
    /**
     * @var string
     */
    protected $type;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Language attributes.
     */
    public function getAttributes(): GetLanguagesResponseDataAttributes
    {
        return $this->attributes;
    }

    /**
     * Language attributes.
     */
    public function setAttributes(GetLanguagesResponseDataAttributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Language identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Language identifier.
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * Language links.
     */
    public function getLinks(): GetLanguagesResponseDataLinks
    {
        return $this->links;
    }

    /**
     * Language links.
     */
    public function setLinks(GetLanguagesResponseDataLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

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
