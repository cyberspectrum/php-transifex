<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ContextScreenshotMapsResponseDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ContextScreenshotMapsResponseDataRelationshipsContextScreenshot
     */
    protected $contextScreenshot;
    /**
     * @var ContextScreenshotMapsResponseDataRelationshipsResourceString
     */
    protected $resourceString;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getContextScreenshot(): ContextScreenshotMapsResponseDataRelationshipsContextScreenshot
    {
        return $this->contextScreenshot;
    }

    public function setContextScreenshot(ContextScreenshotMapsResponseDataRelationshipsContextScreenshot $contextScreenshot): self
    {
        $this->initialized['contextScreenshot'] = true;
        $this->contextScreenshot = $contextScreenshot;

        return $this;
    }

    public function getResourceString(): ContextScreenshotMapsResponseDataRelationshipsResourceString
    {
        return $this->resourceString;
    }

    public function setResourceString(ContextScreenshotMapsResponseDataRelationshipsResourceString $resourceString): self
    {
        $this->initialized['resourceString'] = true;
        $this->resourceString = $resourceString;

        return $this;
    }
}
