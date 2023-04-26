<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchResourceStringByResourceStringIdBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchResourceStringByResourceStringIdConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchResourceStringByResourceStringIdForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchResourceStringByResourceStringIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchResourceStringByResourceStringIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchResourceStringByResourceStringIdTooManyRequestsException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchResourceStringByResourceStringIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourceStringsResourceStringIdRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceStringsResourceStringIdResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared409Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared429Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PatchResourceStringByResourceStringId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $resource_string_id;

    /**
     * @param string $resourceStringId format of the Resource String id should be `o:organization_slug:p:project_slug:r:resource_slug:s:string_hash`
     */
    public function __construct(string $resourceStringId, PatchResourceStringsResourceStringIdRequestBody $requestBody)
    {
        $this->resource_string_id = $resourceStringId;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{resource_string_id}'], [$this->resource_string_id], '/resource_strings/{resource_string_id}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof PatchResourceStringsResourceStringIdRequestBody) {
            return [['Content-Type' => ['application/vnd.api+json']], $serializer->serialize($this->body, 'json')];
        }

        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/vnd.api+json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }

    /**
     * {@inheritdoc}
     *
     * @throws PatchResourceStringByResourceStringIdBadRequestException
     * @throws PatchResourceStringByResourceStringIdUnauthorizedException
     * @throws PatchResourceStringByResourceStringIdForbiddenException
     * @throws PatchResourceStringByResourceStringIdNotFoundException
     * @throws PatchResourceStringByResourceStringIdConflictException
     * @throws PatchResourceStringByResourceStringIdTooManyRequestsException
     * @throws PatchResourceStringByResourceStringIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): ResourceStringsResourceStringIdResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, ResourceStringsResourceStringIdResponse::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchResourceStringByResourceStringIdBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchResourceStringByResourceStringIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchResourceStringByResourceStringIdForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchResourceStringByResourceStringIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchResourceStringByResourceStringIdConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchResourceStringByResourceStringIdTooManyRequestsException($serializer->deserialize($body, ResponseShared429Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchResourceStringByResourceStringIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, ResourceStringsResourceStringIdResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
