<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class GetUsersUserId200ResponseData extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * User identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * User attributes.
     *
     * @var GetUsersUserId200ResponseDataattributes
     */
    protected $attributes;
    /**
     * User links.
     *
     * @var GetUsersUserId200ResponseDatalinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * User identifier.
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * User identifier.
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

    /**
     * User attributes.
     */
    public function getAttributes(): GetUsersUserId200ResponseDataattributes
    {
        return $this->attributes;
    }

    /**
     * User attributes.
     */
    public function setAttributes(GetUsersUserId200ResponseDataattributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * User links.
     */
    public function getLinks(): GetUsersUserId200ResponseDatalinks
    {
        return $this->links;
    }

    /**
     * User links.
     */
    public function setLinks(GetUsersUserId200ResponseDatalinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
