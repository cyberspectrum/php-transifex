<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchResourceStringCommentsCommentIdRequestBodyDataAttributes
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
    protected $priority;
    /**
     * @var string|null
     */
    protected $status = 'open';

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
}
