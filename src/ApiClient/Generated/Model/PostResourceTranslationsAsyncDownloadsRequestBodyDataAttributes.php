<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceTranslationsAsyncDownloadsRequestBodyDataAttributes
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
     * The encoding of the file.
     *
     * @var string
     */
    protected $contentEncoding = 'text';
    /**
     * The file type.
     *
     * @var string
     */
    protected $fileType = 'default';
    /**
     * The transliteration mode of the downloaded file.
     *
     * @var string
     */
    protected $mode = 'default';
    /**
     * Generate mock translation of phrases.<br>.
     *
     * @deprecated
     *
     * @var bool
     */
    protected $pseudo = false;

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

    /**
     * The transliteration mode of the downloaded file.
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * The transliteration mode of the downloaded file.
     */
    public function setMode(string $mode): self
    {
        $this->initialized['mode'] = true;
        $this->mode = $mode;

        return $this;
    }

    /**
     * Generate mock translation of phrases.<br>.
     *
     * @deprecated
     */
    public function getPseudo(): bool
    {
        return $this->pseudo;
    }

    /**
     * Generate mock translation of phrases.<br>.
     *
     * @deprecated
     */
    public function setPseudo(bool $pseudo): self
    {
        $this->initialized['pseudo'] = true;
        $this->pseudo = $pseudo;

        return $this;
    }
}
