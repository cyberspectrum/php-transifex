<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchResourcesResourceIdRequestBodyDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Whether resource should accept translations or not.
     *
     * @var bool
     */
    protected $acceptTranslations;
    /**
     * List of categories to associate similar resources.
     *
     * @var string[]
     */
    protected $categories;
    /**
     * A (public) url to provide an MP4 video file for subtitles translation.
     *
     * @var string|null
     */
    protected $mp4Url;
    /**
     * Name of the resource.
     *
     * @var string
     */
    protected $name;
    /**
     * A (public) url to provide an OGG video file for subtitles translation.
     *
     * @var string|null
     */
    protected $oggUrl;
    /**
     * @var string
     */
    protected $priority;
    /**
     * A (public) url to provide a WEMB video file for subtitles translation.
     *
     * @var string|null
     */
    protected $webmUrl;
    /**
     * A (public) YouTube url to provide a video file for subtitles translation.
     *
     * @var string|null
     */
    protected $youtubeUrl;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Whether resource should accept translations or not.
     */
    public function getAcceptTranslations(): bool
    {
        return $this->acceptTranslations;
    }

    /**
     * Whether resource should accept translations or not.
     */
    public function setAcceptTranslations(bool $acceptTranslations): self
    {
        $this->initialized['acceptTranslations'] = true;
        $this->acceptTranslations = $acceptTranslations;

        return $this;
    }

    /**
     * List of categories to associate similar resources.
     *
     * @return string[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /**
     * List of categories to associate similar resources.
     *
     * @param string[] $categories
     */
    public function setCategories(array $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;

        return $this;
    }

    /**
     * A (public) url to provide an MP4 video file for subtitles translation.
     */
    public function getMp4Url(): ?string
    {
        return $this->mp4Url;
    }

    /**
     * A (public) url to provide an MP4 video file for subtitles translation.
     */
    public function setMp4Url(?string $mp4Url): self
    {
        $this->initialized['mp4Url'] = true;
        $this->mp4Url = $mp4Url;

        return $this;
    }

    /**
     * Name of the resource.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Name of the resource.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * A (public) url to provide an OGG video file for subtitles translation.
     */
    public function getOggUrl(): ?string
    {
        return $this->oggUrl;
    }

    /**
     * A (public) url to provide an OGG video file for subtitles translation.
     */
    public function setOggUrl(?string $oggUrl): self
    {
        $this->initialized['oggUrl'] = true;
        $this->oggUrl = $oggUrl;

        return $this;
    }

    public function getPriority(): string
    {
        return $this->priority;
    }

    public function setPriority(string $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;

        return $this;
    }

    /**
     * A (public) url to provide a WEMB video file for subtitles translation.
     */
    public function getWebmUrl(): ?string
    {
        return $this->webmUrl;
    }

    /**
     * A (public) url to provide a WEMB video file for subtitles translation.
     */
    public function setWebmUrl(?string $webmUrl): self
    {
        $this->initialized['webmUrl'] = true;
        $this->webmUrl = $webmUrl;

        return $this;
    }

    /**
     * A (public) YouTube url to provide a video file for subtitles translation.
     */
    public function getYoutubeUrl(): ?string
    {
        return $this->youtubeUrl;
    }

    /**
     * A (public) YouTube url to provide a video file for subtitles translation.
     */
    public function setYoutubeUrl(?string $youtubeUrl): self
    {
        $this->initialized['youtubeUrl'] = true;
        $this->youtubeUrl = $youtubeUrl;

        return $this;
    }
}
