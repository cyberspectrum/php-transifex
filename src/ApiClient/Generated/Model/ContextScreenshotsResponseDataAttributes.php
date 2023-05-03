<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use DateTimeInterface;

class ContextScreenshotsResponseDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var DateTimeInterface
     */
    protected $datetimeCreated;
    /**
     * @var DateTimeInterface
     */
    protected $datetimeModified;
    /**
     * the URL of the screenshot'.
     *
     * @var string
     */
    protected $mediaUrl;
    /**
     * name of the screenshot.
     *
     * @var string
     */
    protected $name;
    /**
     * the URL of the screenshot's thumbnail.
     *
     * @var string
     */
    protected $thumbUrl;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getDatetimeCreated(): DateTimeInterface
    {
        return $this->datetimeCreated;
    }

    public function setDatetimeCreated(DateTimeInterface $datetimeCreated): self
    {
        $this->initialized['datetimeCreated'] = true;
        $this->datetimeCreated = $datetimeCreated;

        return $this;
    }

    public function getDatetimeModified(): DateTimeInterface
    {
        return $this->datetimeModified;
    }

    public function setDatetimeModified(DateTimeInterface $datetimeModified): self
    {
        $this->initialized['datetimeModified'] = true;
        $this->datetimeModified = $datetimeModified;

        return $this;
    }

    /**
     * the URL of the screenshot'.
     */
    public function getMediaUrl(): string
    {
        return $this->mediaUrl;
    }

    /**
     * the URL of the screenshot'.
     */
    public function setMediaUrl(string $mediaUrl): self
    {
        $this->initialized['mediaUrl'] = true;
        $this->mediaUrl = $mediaUrl;

        return $this;
    }

    /**
     * name of the screenshot.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name of the screenshot.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * the URL of the screenshot's thumbnail.
     */
    public function getThumbUrl(): string
    {
        return $this->thumbUrl;
    }

    /**
     * the URL of the screenshot's thumbnail.
     */
    public function setThumbUrl(string $thumbUrl): self
    {
        $this->initialized['thumbUrl'] = true;
        $this->thumbUrl = $thumbUrl;

        return $this;
    }
}
