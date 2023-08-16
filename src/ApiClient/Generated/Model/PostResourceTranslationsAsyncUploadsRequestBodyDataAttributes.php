<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceTranslationsAsyncUploadsRequestBodyDataAttributes
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
     * The file type.
     *
     * @var string
     */
    protected $fileType;

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
     * The file type.
     */
    public function getFileType(): string
    {
        return $this->fileType;
    }

    /**
     * The file type.
     */
    public function setFileType(string $fileType): self
    {
        $this->initialized['fileType'] = true;
        $this->fileType = $fileType;

        return $this;
    }
}
