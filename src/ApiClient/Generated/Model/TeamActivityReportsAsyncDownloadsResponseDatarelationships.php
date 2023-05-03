<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class TeamActivityReportsAsyncDownloadsResponseDatarelationships extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var TeamActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage
     */
    protected $language;
    /**
     * @var TeamActivityReportsAsyncDownloadsResponseDatarelationshipsTeam
     */
    protected $team;
    /**
     * @var TeamActivityReportsAsyncDownloadsResponseDatarelationshipsUser
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getLanguage(): TeamActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage
    {
        return $this->language;
    }

    public function setLanguage(TeamActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getTeam(): TeamActivityReportsAsyncDownloadsResponseDatarelationshipsTeam
    {
        return $this->team;
    }

    public function setTeam(TeamActivityReportsAsyncDownloadsResponseDatarelationshipsTeam $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

        return $this;
    }

    public function getUser(): TeamActivityReportsAsyncDownloadsResponseDatarelationshipsUser
    {
        return $this->user;
    }

    public function setUser(TeamActivityReportsAsyncDownloadsResponseDatarelationshipsUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
