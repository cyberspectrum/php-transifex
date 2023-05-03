<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use ArrayObject;
use DateTimeInterface;

class PatchResourceStringCommentsCommentId200ResponseDataItemattributes extends ArrayObject
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var string|null
     */
    protected $category;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var string|null
     */
    protected $priority = 'normal';
    /**
     * @var string|null
     */
    protected $status;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var DateTimeInterface
     */
    protected $datetimeCreated;
    /**
     * @var DateTimeInterface
     */
    protected $datetimeModified;
    /**
     * @var DateTimeInterface|null
     */
    protected $datetimeResolved;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }

    public function getPriority(): ?string
    {
        return $this->priority;
    }

    public function setPriority(?string $priority): self
    {
        $this->initialized['priority'] = true;
        $this->priority = $priority;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
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

    public function getDatetimeResolved(): ?DateTimeInterface
    {
        return $this->datetimeResolved;
    }

    public function setDatetimeResolved(?DateTimeInterface $datetimeResolved): self
    {
        $this->initialized['datetimeResolved'] = true;
        $this->datetimeResolved = $datetimeResolved;

        return $this;
    }
}
