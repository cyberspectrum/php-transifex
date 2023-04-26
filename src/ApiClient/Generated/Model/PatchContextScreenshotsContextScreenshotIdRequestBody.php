<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchContextScreenshotsContextScreenshotIdRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Update resource body request details.
     *
     * @var PatchContextScreenshotsContextScreenshotIdRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Update resource body request details.
     */
    public function getData(): PatchContextScreenshotsContextScreenshotIdRequestBodyData
    {
        return $this->data;
    }

    /**
     * Update resource body request details.
     */
    public function setData(PatchContextScreenshotsContextScreenshotIdRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
