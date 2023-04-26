<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use DateTimeInterface;

class TmxAsyncUploadsResponseDataAttributes
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
     * @var AsyncResponseDataAttributesErrorsItems[]
     */
    protected $errors;
    /**
     * @var bool
     */
    protected $override;
    /**
     * @var string
     */
    protected $status;

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

    public function getOverride(): bool
    {
        return $this->override;
    }

    public function setOverride(bool $override): self
    {
        $this->initialized['override'] = true;
        $this->override = $override;

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
