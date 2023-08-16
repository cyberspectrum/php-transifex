<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use DateTimeInterface;

class ProjectWebhooksResponseDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Whether the webhook will be triggered when the event occurs.
     *
     * @var bool
     */
    protected $active;
    /**
     * the url the webhook should call when triggered.
     *
     * @var string
     */
    protected $callbackUrl;
    /**
     * @var DateTimeInterface|null
     */
    protected $datetimeCreated;
    /**
     * @var DateTimeInterface|null
     */
    protected $datetimeModified;
    /**
     * The event that when occurred will trigger the webhook.
     * The following events are supported:
     * `translation_completed`
     * `translation_updated_completed`
     * `review_completed`
     * `proofread_completed`
     * `fillup_completed`
     * `resource_language_stats`.
     *
     * For details about when each of the events is fired, please visit https://help.transifex.com/en/articles/6216204-webhooks.
     *
     * @var string
     */
    protected $eventType;
    /**
     * The secret key is used in order to validate the sender of the request as well as that the content is not tampered. The secret key will be included in the http request when the webhook is triggered.
     * The request will include the headers `X-TX-Signature-V2`, `Content-MD5`, `X-TX-Url`, `Date`.
     *
     * For more details about webhook verification, check https://help.transifex.com/en/articles/6216204-webhooks.
     *
     * @var string
     */
    protected $secretKey;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Whether the webhook will be triggered when the event occurs.
     */
    public function getActive(): bool
    {
        return $this->active;
    }

    /**
     * Whether the webhook will be triggered when the event occurs.
     */
    public function setActive(bool $active): self
    {
        $this->initialized['active'] = true;
        $this->active = $active;

        return $this;
    }

    /**
     * the url the webhook should call when triggered.
     */
    public function getCallbackUrl(): string
    {
        return $this->callbackUrl;
    }

    /**
     * the url the webhook should call when triggered.
     */
    public function setCallbackUrl(string $callbackUrl): self
    {
        $this->initialized['callbackUrl'] = true;
        $this->callbackUrl = $callbackUrl;

        return $this;
    }

    public function getDatetimeCreated(): ?DateTimeInterface
    {
        return $this->datetimeCreated;
    }

    public function setDatetimeCreated(?DateTimeInterface $datetimeCreated): self
    {
        $this->initialized['datetimeCreated'] = true;
        $this->datetimeCreated = $datetimeCreated;

        return $this;
    }

    public function getDatetimeModified(): ?DateTimeInterface
    {
        return $this->datetimeModified;
    }

    public function setDatetimeModified(?DateTimeInterface $datetimeModified): self
    {
        $this->initialized['datetimeModified'] = true;
        $this->datetimeModified = $datetimeModified;

        return $this;
    }

    /**
     * The event that when occurred will trigger the webhook.
     * The following events are supported:
     * `translation_completed`
     * `translation_updated_completed`
     * `review_completed`
     * `proofread_completed`
     * `fillup_completed`
     * `resource_language_stats`.
     *
     * For details about when each of the events is fired, please visit https://help.transifex.com/en/articles/6216204-webhooks.
     */
    public function getEventType(): string
    {
        return $this->eventType;
    }

    /**
     * The event that when occurred will trigger the webhook.
     * The following events are supported:
     * `translation_completed`
     * `translation_updated_completed`
     * `review_completed`
     * `proofread_completed`
     * `fillup_completed`
     * `resource_language_stats`.
     *
     * For details about when each of the events is fired, please visit https://help.transifex.com/en/articles/6216204-webhooks.
     */
    public function setEventType(string $eventType): self
    {
        $this->initialized['eventType'] = true;
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * The secret key is used in order to validate the sender of the request as well as that the content is not tampered. The secret key will be included in the http request when the webhook is triggered.
     * The request will include the headers `X-TX-Signature-V2`, `Content-MD5`, `X-TX-Url`, `Date`.
     *
     * For more details about webhook verification, check https://help.transifex.com/en/articles/6216204-webhooks.
     */
    public function getSecretKey(): string
    {
        return $this->secretKey;
    }

    /**
     * The secret key is used in order to validate the sender of the request as well as that the content is not tampered. The secret key will be included in the http request when the webhook is triggered.
     * The request will include the headers `X-TX-Signature-V2`, `Content-MD5`, `X-TX-Url`, `Date`.
     *
     * For more details about webhook verification, check https://help.transifex.com/en/articles/6216204-webhooks.
     */
    public function setSecretKey(string $secretKey): self
    {
        $this->initialized['secretKey'] = true;
        $this->secretKey = $secretKey;

        return $this;
    }
}
