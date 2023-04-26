<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResourceTranslationsAsyncUploadsResponseDataAttributesDetails
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var int
     */
    protected $translationsCreated;
    /**
     * @var int
     */
    protected $translationsUpdated;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getTranslationsCreated(): int
    {
        return $this->translationsCreated;
    }

    public function setTranslationsCreated(int $translationsCreated): self
    {
        $this->initialized['translationsCreated'] = true;
        $this->translationsCreated = $translationsCreated;

        return $this;
    }

    public function getTranslationsUpdated(): int
    {
        return $this->translationsUpdated;
    }

    public function setTranslationsUpdated(int $translationsUpdated): self
    {
        $this->initialized['translationsUpdated'] = true;
        $this->translationsUpdated = $translationsUpdated;

        return $this;
    }
}
