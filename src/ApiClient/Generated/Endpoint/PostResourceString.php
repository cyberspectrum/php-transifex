<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceStringBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceStringConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceStringForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceStringInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceStringNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceStringTooManyRequestsException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceStringUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStrings201Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStrings409Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringsRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringsRequestBody1;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared429Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostResourceString extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $accept;

    /**
     * Create a new resource string. This path is valid only for file-less.
     *
     * @param PostResourceStringsRequestBody|PostResourceStringsRequestBody1 $requestBody
     * @param array                                                          $accept      Accept content header application/vnd.api+json|application/vnd.api+json;profile="bulk"
     */
    public function __construct($requestBody, array $accept = [])
    {
        $this->body = $requestBody;
        $this->accept = $accept;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/resource_strings';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof PostResourceStringsRequestBody) {
            return [['Content-Type' => ['application/vnd.api+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof PostResourceStringsRequestBody1) {
            return [['Content-Type' => ['application/vnd.api+json;profile="bulk"']], $this->body];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        if (empty($this->accept)) {
            return ['Accept' => ['application/vnd.api+json', 'application/vnd.api+json;profile="bulk"']];
        }

        return $this->accept;
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }

    /**
     * {@inheritdoc}
     *
     * @throws PostResourceStringBadRequestException
     * @throws PostResourceStringUnauthorizedException
     * @throws PostResourceStringForbiddenException
     * @throws PostResourceStringNotFoundException
     * @throws PostResourceStringConflictException
     * @throws PostResourceStringTooManyRequestsException
     * @throws PostResourceStringInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): PostResourceStrings201Response
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (201 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, PostResourceStrings201Response::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceStringBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceStringUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceStringForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceStringNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceStringConflictException($serializer->deserialize($body, PostResourceStrings409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceStringTooManyRequestsException($serializer->deserialize($body, ResponseShared429Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceStringInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, PostResourceStrings201Response::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
