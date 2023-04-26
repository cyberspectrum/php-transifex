<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceTranslationsAsyncUploadsRequestBody
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
     * @var string
     */
    protected $fileType;
    /**
     * Language identifier.
     *
     * @var string
     */
    protected $language;
    /**
     * Resource identifier.
     *
     * @var string
     */
    protected $resource;

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

    public function getFileType(): string
    {
        return $this->fileType;
    }

    public function setFileType(string $fileType): self
    {
        $this->initialized['fileType'] = true;
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * Language identifier.
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * Language identifier.
     */
    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;

        return $this;
    }

    /**
     * Resource identifier.
     */
    public function getResource(): string
    {
        return $this->resource;
    }

    /**
     * Resource identifier.
     */
    public function setResource(string $resource): self
    {
        $this->initialized['resource'] = true;
        $this->resource = $resource;

        return $this;
    }
}
