<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostProjectWebhooksRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The `project` this webhook belongs to.
     *
     * @var PostProjectWebhooksRequestBodyDataRelationshipsProject
     */
    protected $project;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The `project` this webhook belongs to.
     */
    public function getProject(): PostProjectWebhooksRequestBodyDataRelationshipsProject
    {
        return $this->project;
    }

    /**
     * The `project` this webhook belongs to.
     */
    public function setProject(PostProjectWebhooksRequestBodyDataRelationshipsProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }
}
