<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourcesRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The base `resource` that this `resource` is a branch of.
     *
     * @var ResourcesRequestBodyDataRelationshipsBase|null
     */
    protected $base;
    /**
     * The `i18n_format` of the resource to create.
     *
     * @var PostResourcesRequestBodyDataRelationshipsI18nFormat
     */
    protected $i18nFormat;
    /**
     * The `project` resource should belong to.
     *
     * @var PostResourcesRequestBodyDataRelationshipsProject
     */
    protected $project;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The base `resource` that this `resource` is a branch of.
     */
    public function getBase(): ?ResourcesRequestBodyDataRelationshipsBase
    {
        return $this->base;
    }

    /**
     * The base `resource` that this `resource` is a branch of.
     */
    public function setBase(?ResourcesRequestBodyDataRelationshipsBase $base): self
    {
        $this->initialized['base'] = true;
        $this->base = $base;

        return $this;
    }

    /**
     * The `i18n_format` of the resource to create.
     */
    public function getI18nFormat(): PostResourcesRequestBodyDataRelationshipsI18nFormat
    {
        return $this->i18nFormat;
    }

    /**
     * The `i18n_format` of the resource to create.
     */
    public function setI18nFormat(PostResourcesRequestBodyDataRelationshipsI18nFormat $i18nFormat): self
    {
        $this->initialized['i18nFormat'] = true;
        $this->i18nFormat = $i18nFormat;

        return $this;
    }

    /**
     * The `project` resource should belong to.
     */
    public function getProject(): PostResourcesRequestBodyDataRelationshipsProject
    {
        return $this->project;
    }

    /**
     * The `project` resource should belong to.
     */
    public function setProject(PostResourcesRequestBodyDataRelationshipsProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }
}
