<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceStringCommentsCommentId200ResponseDatarelationshipsLanguage
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Language data container.
     *
     * @var GetResourceStringCommentsCommentId200ResponseDatarelationshipsLanguageData
     */
    protected $data;
    /**
     * Language related link.
     *
     * @var GetResourceStringCommentsCommentId200ResponseDatarelationshipsLanguageLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Language data container.
     */
    public function getData(): GetResourceStringCommentsCommentId200ResponseDatarelationshipsLanguageData
    {
        return $this->data;
    }

    /**
     * Language data container.
     */
    public function setData(GetResourceStringCommentsCommentId200ResponseDatarelationshipsLanguageData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Language related link.
     */
    public function getLinks(): GetResourceStringCommentsCommentId200ResponseDatarelationshipsLanguageLinks
    {
        return $this->links;
    }

    /**
     * Language related link.
     */
    public function setLinks(GetResourceStringCommentsCommentId200ResponseDatarelationshipsLanguageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
