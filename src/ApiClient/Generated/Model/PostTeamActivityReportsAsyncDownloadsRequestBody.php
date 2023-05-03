<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTeamActivityReportsAsyncDownloadsRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Create team activity report download body request.
     *
     * @var PostTeamActivityReportsAsyncDownloadsRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Create team activity report download body request.
    details.
     */
    public function getData(): PostTeamActivityReportsAsyncDownloadsRequestBodyData
    {
        return $this->data;
    }

    /**
     * Create team activity report download body request.
    details.
     */
    public function setData(PostTeamActivityReportsAsyncDownloadsRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
