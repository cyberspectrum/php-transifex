<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTmxAsyncUploadsRequestBodyDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The url that will be called when the processing is completed.
     * For more details about callback_url you can refer to [Asynchronous Processing](#section/Asynchronous-Processing) section.
     *
     * @var string|null
     */
    protected $callbackUrl;
    /**
     * The file to upload json or base64 encoded.
     *
     * @var string
     */
    protected $content;
    /**
     * The encoding of the file.
     *
     * @var string
     */
    protected $contentEncoding;
    /**
     * Whether to override the tm when uploading a tmx file.
     *
     * @var bool
     */
    protected $override = false;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The url that will be called when the processing is completed.
     * For more details about callback_url you can refer to [Asynchronous Processing](#section/Asynchronous-Processing) section.
     */
    public function getCallbackUrl(): ?string
    {
        return $this->callbackUrl;
    }

    /**
     * The url that will be called when the processing is completed.
     * For more details about callback_url you can refer to [Asynchronous Processing](#section/Asynchronous-Processing) section.
     */
    public function setCallbackUrl(?string $callbackUrl): self
    {
        $this->initialized['callbackUrl'] = true;
        $this->callbackUrl = $callbackUrl;

        return $this;
    }

    /**
     * The file to upload json or base64 encoded.
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * The file to upload json or base64 encoded.
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    /**
     * The encoding of the file.
     */
    public function getContentEncoding(): string
    {
        return $this->contentEncoding;
    }

    /**
     * The encoding of the file.
     */
    public function setContentEncoding(string $contentEncoding): self
    {
        $this->initialized['contentEncoding'] = true;
        $this->contentEncoding = $contentEncoding;

        return $this;
    }

    /**
     * Whether to override the tm when uploading a tmx file.
     */
    public function getOverride(): bool
    {
        return $this->override;
    }

    /**
     * Whether to override the tm when uploading a tmx file.
     */
    public function setOverride(bool $override): self
    {
        $this->initialized['override'] = true;
        $this->override = $override;

        return $this;
    }
}
