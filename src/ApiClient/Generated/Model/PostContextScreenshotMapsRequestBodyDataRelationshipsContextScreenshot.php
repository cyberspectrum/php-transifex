<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostContextScreenshotMapsRequestBodyDataRelationshipsContextScreenshot
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Context Screenshot identifier data container.
     *
     * @var ContextScreenshotMapsDataRelationshipsContextScreenshotData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Context Screenshot identifier data container.
     */
    public function getData(): ContextScreenshotMapsDataRelationshipsContextScreenshotData
    {
        return $this->data;
    }

    /**
     * Context Screenshot identifier data container.
     */
    public function setData(ContextScreenshotMapsDataRelationshipsContextScreenshotData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
