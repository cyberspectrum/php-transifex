<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringByResourceStringIdForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringByResourceStringIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringByResourceStringIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringByResourceStringIdTooManyRequestsException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringByResourceStringIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceStringsResourceStringIdResponse;
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

class GetResourceStringByResourceStringId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $resource_string_id;

    /**
     * Get the details of a specific resource string.
     *
     * @param string $resourceStringId format of the Resource String id should be `o:organization_slug:p:project_slug:r:resource_slug:s:string_hash`
     */
    public function __construct(string $resourceStringId)
    {
        $this->resource_string_id = $resourceStringId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{resource_string_id}'], [$this->resource_string_id], '/resource_strings/{resource_string_id}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
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
     * @throws GetResourceStringByResourceStringIdUnauthorizedException
     * @throws GetResourceStringByResourceStringIdForbiddenException
     * @throws GetResourceStringByResourceStringIdNotFoundException
     * @throws GetResourceStringByResourceStringIdTooManyRequestsException
     * @throws GetResourceStringByResourceStringIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): ResourceStringsResourceStringIdResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, ResourceStringsResourceStringIdResponse::class, 'json');
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringByResourceStringIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringByResourceStringIdForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringByResourceStringIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringByResourceStringIdTooManyRequestsException($serializer->deserialize($body, ResponseShared429Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringByResourceStringIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, ResourceStringsResourceStringIdResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
