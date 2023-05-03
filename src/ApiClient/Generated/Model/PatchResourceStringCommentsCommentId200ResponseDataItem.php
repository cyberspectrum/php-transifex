<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class PatchResourceStringCommentsCommentId200ResponseDataItem extends ArrayObject
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
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemattributes
     */
    protected $attributes;
    /**
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemlinks
     */
    protected $links;
    /**
     * Resource String Comment relationships.
     *
     * @var PatchResourceStringCommentsCommentId200ResponseDataItemrelationships
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

    public function getAttributes(): PatchResourceStringCommentsCommentId200ResponseDataItemattributes
    {
        return $this->attributes;
    }

    public function setAttributes(PatchResourceStringCommentsCommentId200ResponseDataItemattributes $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;

        return $this;
    }

    public function getLinks(): PatchResourceStringCommentsCommentId200ResponseDataItemlinks
    {
        return $this->links;
    }

    public function setLinks(PatchResourceStringCommentsCommentId200ResponseDataItemlinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }

    /**
     * Resource String Comment relationships.
     */
    public function getRelationships(): PatchResourceStringCommentsCommentId200ResponseDataItemrelationships
    {
        return $this->relationships;
    }

    /**
     * Resource String Comment relationships.
     */
    public function setRelationships(PatchResourceStringCommentsCommentId200ResponseDataItemrelationships $relationships): self
    {
        $this->initialized['relationships'] = true;
        $this->relationships = $relationships;

        return $this;
    }
}
