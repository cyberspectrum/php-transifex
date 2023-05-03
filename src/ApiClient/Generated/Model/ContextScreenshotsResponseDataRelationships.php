<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ContextScreenshotsResponseDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ContextScreenshotsResponseDataRelationshipsContextScreenshotsMaps
     */
    protected $contextScreenshotsMaps;
    /**
     * @var ResponseDataRelationshipsProject
     */
    protected $project;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getContextScreenshotsMaps(): ContextScreenshotsResponseDataRelationshipsContextScreenshotsMaps
    {
        return $this->contextScreenshotsMaps;
    }

    public function setContextScreenshotsMaps(ContextScreenshotsResponseDataRelationshipsContextScreenshotsMaps $contextScreenshotsMaps): self
    {
        $this->initialized['contextScreenshotsMaps'] = true;
        $this->contextScreenshotsMaps = $contextScreenshotsMaps;

        return $this;
    }

    public function getProject(): ResponseDataRelationshipsProject
    {
        return $this->project;
    }

    public function setProject(ResponseDataRelationshipsProject $project): self
    {
        $this->initialized['project'] = true;
        $this->project = $project;

        return $this;
    }
}
