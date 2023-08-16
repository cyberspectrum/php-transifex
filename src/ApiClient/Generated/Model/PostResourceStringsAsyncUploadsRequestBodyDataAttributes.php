<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringsAsyncUploadsRequestBodyDataAttributes
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
     * Option to replace edited strings.
     * If true, updated strings modified in the editor will be overwritten.
     *
     * @var bool
     */
    protected $replaceEditedStrings = false;

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
     * Option to replace edited strings.
     * If true, updated strings modified in the editor will be overwritten.
     */
    public function getReplaceEditedStrings(): bool
    {
        return $this->replaceEditedStrings;
    }

    /**
     * Option to replace edited strings.
     * If true, updated strings modified in the editor will be overwritten.
     */
    public function setReplaceEditedStrings(bool $replaceEditedStrings): self
    {
        $this->initialized['replaceEditedStrings'] = true;
        $this->replaceEditedStrings = $replaceEditedStrings;

        return $this;
    }
}
