<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ResponseShared409Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ResponseShared409ResponseErrorsItem[]
     */
    protected $errors;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @return ResponseShared409ResponseErrorsItem[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param ResponseShared409ResponseErrorsItem[] $errors
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}
