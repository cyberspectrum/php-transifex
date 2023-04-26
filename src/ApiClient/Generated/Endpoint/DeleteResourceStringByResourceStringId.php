<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteResourceStringByResourceStringIdConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteResourceStringByResourceStringIdForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteResourceStringByResourceStringIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteResourceStringByResourceStringIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteResourceStringByResourceStringIdTooManyRequestsException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteResourceStringByResourceStringIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
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

class DeleteResourceStringByResourceStringId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $resource_string_id;

    /**
     * Delete a resource string.

     *
     * @param string $resourceStringId format of the Resource String id should be `o:organization_slug:p:project_slug:r:resource_slug:s:string_hash`
     */
    public function __construct(string $resourceStringId)
    {
        $this->resource_string_id = $resourceStringId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
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
     * @return null
     *
     * @throws DeleteResourceStringByResourceStringIdUnauthorizedException
     * @throws DeleteResourceStringByResourceStringIdForbiddenException
     * @throws DeleteResourceStringByResourceStringIdNotFoundException
     * @throws DeleteResourceStringByResourceStringIdConflictException
     * @throws DeleteResourceStringByResourceStringIdTooManyRequestsException
     * @throws DeleteResourceStringByResourceStringIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteResourceStringByResourceStringIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteResourceStringByResourceStringIdForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteResourceStringByResourceStringIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteResourceStringByResourceStringIdConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteResourceStringByResourceStringIdTooManyRequestsException($serializer->deserialize($body, ResponseShared429Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteResourceStringByResourceStringIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }

        return null;

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
