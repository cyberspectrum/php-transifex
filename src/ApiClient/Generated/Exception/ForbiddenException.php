<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception;

use RuntimeException;

class ForbiddenException extends RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 403);
    }
}
