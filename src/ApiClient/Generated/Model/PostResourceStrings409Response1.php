<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStrings409Response1
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PostResourceStrings409ResponseErrorsItems1[]
     */
    protected $errors;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @return PostResourceStrings409ResponseErrorsItems1[]
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param PostResourceStrings409ResponseErrorsItems1[] $errors
     */
    public function setErrors(array $errors): self
    {
        $this->initialized['errors'] = true;
        $this->errors = $errors;

        return $this;
    }
}
