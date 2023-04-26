<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringCommentsRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The `language` this comment refers to.
     *
     * @var PostResourceStringCommentsRequestBodyDataRelationshipsLanguage
     */
    protected $language;
    /**
     * The `resource string` this comment refers to.
     *
     * @var PostResourceStringCommentsRequestBodyDataRelationshipsResourceString
     */
    protected $resourceString;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The `language` this comment refers to.
     */
    public function getLanguage(): PostResourceStringCommentsRequestBodyDataRelationshipsLanguage
    {
        return $this->language;
    }

    /**
     * The `language` this comment refers to.
     */
    public function setLanguage(PostResourceStringCommentsRequestBodyDataRelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * The `resource string` this comment refers to.
     */
    public function getResourceString(): PostResourceStringCommentsRequestBodyDataRelationshipsResourceString
    {
        return $this->resourceString;
    }

    /**
     * The `resource string` this comment refers to.
     */
    public function setResourceString(PostResourceStringCommentsRequestBodyDataRelationshipsResourceString $resourceString): self
    {
        $this->initialized['resourceString'] = true;
        $this->resourceString = $resourceString;

        return $this;
    }
}
