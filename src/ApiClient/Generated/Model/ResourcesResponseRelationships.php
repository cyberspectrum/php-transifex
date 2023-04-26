<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResourcesResponseRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * I18n format object.
     *
     * @var ResourcesResponseRelationshipsI18nFormat
     */
    protected $i18nFormat;
    /**
     * Project object.
     *
     * @var ProjectResponseRelationshipsProject
     */
    protected $project;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * I18n format object.
     */
    public function getI18nFormat(): ResourcesResponseRelationshipsI18nFormat
    {
        return $this->i18nFormat;
    }

    /**
     * I18n format object.
     */
    public function setI18nFormat(ResourcesResponseRelationshipsI18nFormat $i18nFormat): self
    {
        $this->initialized['i18nFormat'] = true;
        $this->i18nFormat = $i18nFormat;

        return $this;
    }

    /**
     * Project object.
     */
    public function getProject(): ProjectResponseRelationshipsProject
    {
        return $this->project;
    }

    /**
     * Project object.
     */
    public function setProject(ProjectResponseRelationshipsProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }
}
