<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostContextScreenshotMapsRequestBodyDataRelationships
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The `context_screenshot` the resource_string belongs to.
     *
     * @var PostContextScreenshotMapsRequestBodyDataRelationshipsContextScreenshot
     */
    protected $contextScreenshot;
    /**
     * The `resource_string` context screenshot map refers to.
     *
     * @var PostContextScreenshotMapsRequestBodyDataRelationshipsResourceString
     */
    protected $resourceString;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The `context_screenshot` the resource_string belongs to.
     */
    public function getContextScreenshot(): PostContextScreenshotMapsRequestBodyDataRelationshipsContextScreenshot
    {
        return $this->contextScreenshot;
    }

    /**
     * The `context_screenshot` the resource_string belongs to.
     */
    public function setContextScreenshot(PostContextScreenshotMapsRequestBodyDataRelationshipsContextScreenshot $contextScreenshot): self
    {
        $this->initialized['contextScreenshot'] = true;
        $this->contextScreenshot = $contextScreenshot;

        return $this;
    }

    /**
     * The `resource_string` context screenshot map refers to.
     */
    public function getResourceString(): PostContextScreenshotMapsRequestBodyDataRelationshipsResourceString
    {
        return $this->resourceString;
    }

    /**
     * The `resource_string` context screenshot map refers to.
     */
    public function setResourceString(PostContextScreenshotMapsRequestBodyDataRelationshipsResourceString $resourceString): self
    {
        $this->initialized['resourceString'] = true;
        $this->resourceString = $resourceString;

        return $this;
    }
}
