<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class GetResourceStringCommentsCommentId200ResponseData extends ArrayObject
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
     * @var GetResourceStringCommentsCommentId200ResponseDataattributes
     */
    protected $attributes;
    /**
     * @var GetResourceStringCommentsCommentId200ResponseDatalinks
     */
    protected $links;
    /**
     * Resource String Comment relationships.
     *
     * @var GetResourceStringCommentsCommentId200ResponseDatarelationships
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

    public function getAttributes(): GetResourceStringCommentsCommentId200ResponseDataattributes
    {
        return $this->attributes;
    }

    public function setAttributes(GetResourceStringCommentsCommentId200ResponseDataattributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    public function getLinks(): GetResourceStringCommentsCommentId200ResponseDatalinks
    {
        return $this->links;
    }

    public function setLinks(GetResourceStringCommentsCommentId200ResponseDatalinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    /**
     * Resource String Comment relationships.
     */
    public function getRelationships(): GetResourceStringCommentsCommentId200ResponseDatarelationships
    {
        return $this->relationships;
    }

    /**
     * Resource String Comment relationships.
     */
    public function setRelationships(GetResourceStringCommentsCommentId200ResponseDatarelationships $relationships): self
    {
        $this->initialized['relationships'] = true;
        $this->relationships = $relationships;

        return $this;
    }
}
