<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use DateTimeInterface;

class ResourceTranslationsAsyncUploadsResponseDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var DateTimeInterface
     */
    protected $dateCreated;
    /**
     * @var DateTimeInterface
     */
    protected $dateModified;
    /**
     * @var ResourceTranslationsAsyncUploadsResponseDataAttributesDetails|null
     */
    protected $details;
    /**
     * @var AsyncResponseDataAttributesErrorsItems[]
     */
    protected $errors;
    /**
     * @var string
     */
    protected $status;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getDateCreated(): DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(DateTimeInterface $dateCreated): self
    {
        $this->initialized['dateCreated'] = true;
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getDateModified(): DateTimeInterface
    {
        return $this->dateModified;
    }

    public function setDateModified(DateTimeInterface $dateModified): self
    {
        $this->initialized['dateModified'] = true;
        $this->dateModified = $dateModified;

        return $this;
    }

    public function getDetails(): ?ResourceTranslationsAsyncUploadsResponseDataAttributesDetails
    {
        return $this->details;
    }

    public function setDetails(?ResourceTranslationsAsyncUploadsResponseDataAttributesDetails $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;

        return $this;
    }

    /**
     * @return AsyncResponseDataAttributesErrorsItems[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param AsyncResponseDataAttributesErrorsItems[] $errors
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }
}
