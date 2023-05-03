<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringsAsyncUploadsRequestBody
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
     * Option to replace edited strings.
     *
     * @var bool
     */
    protected $replaceEditedStrings = false;
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

    /**
     * Option to replace edited strings.
    If true, updated strings modified in the editor will be overwritten.
     */
    public function getReplaceEditedStrings(): bool
    {
        return $this->replaceEditedStrings;
    }

    /**
     * Option to replace edited strings.
    If true, updated strings modified in the editor will be overwritten.
     */
    public function setReplaceEditedStrings(bool $replaceEditedStrings): self
    {
        $this->initialized['replaceEditedStrings'] = true;
        $this->replaceEditedStrings = $replaceEditedStrings;

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
