<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class TeamActivityReportsAsyncDownloadsResponseDatarelationshipsTeam extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var TeamActivityReportsAsyncDownloadsResponseDatarelationshipsTeamData
     */
    protected $data;
    /**
     * @var TeamActivityReportsAsyncDownloadsResponseDatarelationshipsTeamLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): TeamActivityReportsAsyncDownloadsResponseDatarelationshipsTeamData
    {
        return $this->data;
    }

    public function setData(TeamActivityReportsAsyncDownloadsResponseDatarelationshipsTeamData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    public function getLinks(): TeamActivityReportsAsyncDownloadsResponseDatarelationshipsTeamLinks
    {
        return $this->links;
    }

    public function setLinks(TeamActivityReportsAsyncDownloadsResponseDatarelationshipsTeamLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
