<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTeamActivityReportsAsyncDownloadsRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Only fetch translation activity for this language.
     *
     * @var PostActivityReportsAsyncDownloadsRequestBodyDataRelationshipsLanguage
     */
    protected $language;
    /**
     * The `team` whose translation activity you.
     *
     * @var PostTeamActivityReportsAsyncDownloadsRequestBodyDataRelationshipsTeam
     */
    protected $team;
    /**
     * Only fetch translation activity for this user.
     *
     * @var PostActivityReportsAsyncDownloadsRequestBodyDataRelationshipsUser
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Only fetch translation activity for this language.
     */
    public function getLanguage(): PostActivityReportsAsyncDownloadsRequestBodyDataRelationshipsLanguage
    {
        return $this->language;
    }

    /**
     * Only fetch translation activity for this language.
     */
    public function setLanguage(PostActivityReportsAsyncDownloadsRequestBodyDataRelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * The `team` whose translation activity you.
    want to make a report for.
     */
    public function getTeam(): PostTeamActivityReportsAsyncDownloadsRequestBodyDataRelationshipsTeam
    {
        return $this->team;
    }

    /**
     * The `team` whose translation activity you.
    want to make a report for.
     */
    public function setTeam(PostTeamActivityReportsAsyncDownloadsRequestBodyDataRelationshipsTeam $team): self
    {
        $this->initialized['team'] = true;
        $this->team = $team;

        return $this;
    }

    /**
     * Only fetch translation activity for this user.
     */
    public function getUser(): PostActivityReportsAsyncDownloadsRequestBodyDataRelationshipsUser
    {
        return $this->user;
    }

    /**
     * Only fetch translation activity for this user.
     */
    public function setUser(PostActivityReportsAsyncDownloadsRequestBodyDataRelationshipsUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
