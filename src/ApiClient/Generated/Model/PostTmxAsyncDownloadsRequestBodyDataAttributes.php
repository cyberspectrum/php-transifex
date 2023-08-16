<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTmxAsyncDownloadsRequestBodyDataAttributes
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
     * Whether to receive a link to the TMX file as an email
     * when it's ready. The email address used will be the one
     * registered to the user making the API call.
     *
     * @var bool
     */
    protected $email = false;
    /**
     * Whether to include context in the tmx file.<br>
     * <b>This attribute will be ignored. Context will always be included.</b><br>.
     *
     * @deprecated
     *
     * @var bool
     */
    protected $includeContext = false;
    /**
     * Whether to include untranslated entities in the tmx file.<br>
     * <b>This attribute will be ignored. Untranslated entities will not be included.</b><br>.
     *
     * @deprecated
     *
     * @var bool
     */
    protected $includeUntranslated = false;

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
     * Whether to receive a link to the TMX file as an email
     * when it's ready. The email address used will be the one
     * registered to the user making the API call.
     */
    public function getEmail(): bool
    {
        return $this->email;
    }

    /**
     * Whether to receive a link to the TMX file as an email
     * when it's ready. The email address used will be the one
     * registered to the user making the API call.
     */
    public function setEmail(bool $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * Whether to include context in the tmx file.<br>
     * <b>This attribute will be ignored. Context will always be included.</b><br>.
     *
     * @deprecated
     */
    public function getIncludeContext(): bool
    {
        return $this->includeContext;
    }

    /**
     * Whether to include context in the tmx file.<br>
     * <b>This attribute will be ignored. Context will always be included.</b><br>.
     *
     * @deprecated
     */
    public function setIncludeContext(bool $includeContext): self
    {
        $this->initialized['includeContext'] = true;
        $this->includeContext = $includeContext;

        return $this;
    }

    /**
     * Whether to include untranslated entities in the tmx file.<br>
     * <b>This attribute will be ignored. Untranslated entities will not be included.</b><br>.
     *
     * @deprecated
     */
    public function getIncludeUntranslated(): bool
    {
        return $this->includeUntranslated;
    }

    /**
     * Whether to include untranslated entities in the tmx file.<br>
     * <b>This attribute will be ignored. Untranslated entities will not be included.</b><br>.
     *
     * @deprecated
     */
    public function setIncludeUntranslated(bool $includeUntranslated): self
    {
        $this->initialized['includeUntranslated'] = true;
        $this->includeUntranslated = $includeUntranslated;

        return $this;
    }
}
