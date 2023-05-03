<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;

class OrganizationActivityReportsAsyncDownloadsResponseDatarelationships extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage
     */
    protected $language;
    /**
     * @var OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsOrganization
     */
    protected $organization;
    /**
     * @var OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsUser
     */
    protected $user;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getLanguage(): OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage
    {
        return $this->language;
    }

    public function setLanguage(OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsLanguage $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    public function getOrganization(): OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsOrganization
    {
        return $this->organization;
    }

    public function setOrganization(OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsOrganization $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;

        return $this;
    }

    public function getUser(): OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsUser
    {
        return $this->user;
    }

    public function setUser(OrganizationActivityReportsAsyncDownloadsResponseDatarelationshipsUser $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;

        return $this;
    }
}
