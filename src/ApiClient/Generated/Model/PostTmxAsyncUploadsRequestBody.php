<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTmxAsyncUploadsRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The url that will be called when the processing is completed.
     *
     * @var string|null
     */
    protected $callbackUrl;
    /**
     * The file to upload.
     *
     * @var string
     */
    protected $content;
    /**
     * Language identifier.
     *
     * @var string
     */
    protected $languageId;
    /**
     * @var bool
     */
    protected $override = false;
    /**
     * Project identifier.
     *
     * @var string
     */
    protected $projectId;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The url that will be called when the processing is completed.
    For more details about callback_url you can refer to [Asynchronous Processing](#section/Asynchronous-Processing) section
     */
    public function getCallbackUrl(): ?string
    {
        return $this->callbackUrl;
    }

    /**
     * The url that will be called when the processing is completed.
    For more details about callback_url you can refer to [Asynchronous Processing](#section/Asynchronous-Processing) section
     */
    public function setCallbackUrl(?string $callbackUrl): self
    {
        $this->initialized['callbackUrl'] = true;
        $this->callbackUrl = $callbackUrl;

        return $this;
    }

    /**
     * The file to upload.
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * The file to upload.
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    /**
     * Language identifier.
     */
    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    /**
     * Language identifier.
     */
    public function setLanguageId(string $languageId): self
    {
        $this->initialized['languageId'] = true;
        $this->languageId = $languageId;

        return $this;
    }

    public function getOverride(): bool
    {
        return $this->override;
    }

    public function setOverride(bool $override): self
    {
        $this->initialized['override'] = true;
        $this->override = $override;

        return $this;
    }

    /**
     * Project identifier.
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * Project identifier.
     */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;

        return $this;
    }
}
