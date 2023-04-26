<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetI18nFormats200ResponseDataItemsAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The i18n_type description.
     *
     * @var string
     */
    protected $description;
    /**
     * The file name extension association to the media_type.
     *
     * @var string[]
     */
    protected $fileExtensions;
    /**
     * A two-part identifier for file formats and format contents transmitted.
     *
     * @var string
     */
    protected $mediaType;
    /**
     * The name of the i18n format.
     *
     * @var string
     */
    protected $name;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The i18n_type description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * The i18n_type description.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * The file name extension association to the media_type.
     *
     * @return string[]
     */
    public function getFileExtensions(): array
    {
        return $this->fileExtensions;
    }

    /**
     * The file name extension association to the media_type.
     *
     * @param string[] $fileExtensions
     */
    public function setFileExtensions(array $fileExtensions): self
    {
        $this->initialized['fileExtensions'] = true;
        $this->fileExtensions = $fileExtensions;

        return $this;
    }

    /**
     * A two-part identifier for file formats and format contents transmitted.
     */
    public function getMediaType(): string
    {
        return $this->mediaType;
    }

    /**
     * A two-part identifier for file formats and format contents transmitted.
     */
    public function setMediaType(string $mediaType): self
    {
        $this->initialized['mediaType'] = true;
        $this->mediaType = $mediaType;

        return $this;
    }

    /**
     * The name of the i18n format.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the i18n format.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
