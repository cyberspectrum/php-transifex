<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringComments201ResponseDatarelationshipsLanguage
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Language data container.
     *
     * @var PostResourceStringComments201ResponseDatarelationshipsLanguageData
     */
    protected $data;
    /**
     * Language related link.
     *
     * @var PostResourceStringComments201ResponseDatarelationshipsLanguageLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Language data container.
     */
    public function getData(): PostResourceStringComments201ResponseDatarelationshipsLanguageData
    {
        return $this->data;
    }

    /**
     * Language data container.
     */
    public function setData(PostResourceStringComments201ResponseDatarelationshipsLanguageData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Language related link.
     */
    public function getLinks(): PostResourceStringComments201ResponseDatarelationshipsLanguageLinks
    {
        return $this->links;
    }

    /**
     * Language related link.
     */
    public function setLinks(PostResourceStringComments201ResponseDatarelationshipsLanguageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
