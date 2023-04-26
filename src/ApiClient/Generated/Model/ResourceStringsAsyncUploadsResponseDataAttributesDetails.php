<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResourceStringsAsyncUploadsResponseDataAttributesDetails
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var int
     */
    protected $stringsCreated;
    /**
     * @var int
     */
    protected $stringsDeleted;
    /**
     * @var int
     */
    protected $stringsSkipped;
    /**
     * @var int
     */
    protected $stringsUpdated;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getStringsCreated(): int
    {
        return $this->stringsCreated;
    }

    public function setStringsCreated(int $stringsCreated): self
    {
        $this->initialized['stringsCreated'] = true;
        $this->stringsCreated = $stringsCreated;

        return $this;
    }

    public function getStringsDeleted(): int
    {
        return $this->stringsDeleted;
    }

    public function setStringsDeleted(int $stringsDeleted): self
    {
        $this->initialized['stringsDeleted'] = true;
        $this->stringsDeleted = $stringsDeleted;

        return $this;
    }

    public function getStringsSkipped(): int
    {
        return $this->stringsSkipped;
    }

    public function setStringsSkipped(int $stringsSkipped): self
    {
        $this->initialized['stringsSkipped'] = true;
        $this->stringsSkipped = $stringsSkipped;

        return $this;
    }

    public function getStringsUpdated(): int
    {
        return $this->stringsUpdated;
    }

    public function setStringsUpdated(int $stringsUpdated): self
    {
        $this->initialized['stringsUpdated'] = true;
        $this->stringsUpdated = $stringsUpdated;

        return $this;
    }
}
