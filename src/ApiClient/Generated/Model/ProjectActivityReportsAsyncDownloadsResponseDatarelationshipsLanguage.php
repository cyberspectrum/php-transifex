<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageData
     */
    protected $data;
    /**
     * @var ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageData
    {
        return $this->data;
    }

    public function setData(ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageLinks
    {
        return $this->links;
    }

    public function setLinks(ProjectActivityReportsAsyncDownloadsResponseDatarelationshipsLanguageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
