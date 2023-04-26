<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Authentication;

use Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin;
use Psr\Http\Message\RequestInterface;

class BearerAuthAuthentication implements AuthenticationPlugin
{
    private $token;

    public function __construct(string $token)
    {
        $this->{'token'} = $token;
    }

    public function authentication(RequestInterface $request): RequestInterface
    {
        $header = sprintf('Bearer %s', $this->{'token'});
        $request = $request->withHeader('Authorization', $header);

        return $request;
    }

    public function getScope(): string
    {
        return 'bearerAuth';
    }
}
