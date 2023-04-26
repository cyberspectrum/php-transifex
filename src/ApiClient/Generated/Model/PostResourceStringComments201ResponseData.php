<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class PostResourceStringComments201ResponseData extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $type = 'resource_string_comments';
    /**
     * @var PostResourceStringComments201ResponseDataattributes
     */
    protected $attributes;
    /**
     * @var PostResourceStringComments201ResponseDatalinks
     */
    protected $links;
    /**
     * Resource String Comment relationships.
     *
     * @var PostResourceStringComments201ResponseDatarelationships
     */
    protected $relationships;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
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

    public function getAttributes(): PostResourceStringComments201ResponseDataattributes
    {
        return $this->attributes;
    }

    public function setAttributes(PostResourceStringComments201ResponseDataattributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    public function getLinks(): PostResourceStringComments201ResponseDatalinks
    {
        return $this->links;
    }

    public function setLinks(PostResourceStringComments201ResponseDatalinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    /**
     * Resource String Comment relationships.
     */
    public function getRelationships(): PostResourceStringComments201ResponseDatarelationships
    {
        return $this->relationships;
    }

    /**
     * Resource String Comment relationships.
     */
    public function setRelationships(PostResourceStringComments201ResponseDatarelationships $relationships): self
    {
        $this->initialized['relationships'] = true;
        $this->relationships = $relationships;

        return $this;
    }
}
