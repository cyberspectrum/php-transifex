<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use DateTimeInterface;

class ResourceAsyncMergesResponseDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var string
     */
    protected $conflictResolution;
    /**
     * @var DateTimeInterface|null
     */
    protected $dateCompleted;
    /**
     * @var DateTimeInterface
     */
    protected $dateCreated;
    /**
     * @var string
     */
    protected $status;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getConflictResolution(): string
    {
        return $this->conflictResolution;
    }

    public function setConflictResolution(string $conflictResolution): self
    {
        $this->initialized['conflictResolution'] = true;
        $this->conflictResolution = $conflictResolution;

        return $this;
    }

    public function getDateCompleted(): ?DateTimeInterface
    {
        return $this->dateCompleted;
    }

    public function setDateCompleted(?DateTimeInterface $dateCompleted): self
    {
        $this->initialized['dateCompleted'] = true;
        $this->dateCompleted = $dateCompleted;

        return $this;
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
