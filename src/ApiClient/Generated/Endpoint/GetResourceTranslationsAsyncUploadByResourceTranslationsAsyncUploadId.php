<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsAsyncUploadsResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $resource_translations_async_upload_id;

    /**
     * Get details of a resource translations upload.
     *
     * @param string $resourceTranslationsAsyncUploadId format of the resource_translations_async_upload_id should be a UUID
     */
    public function __construct(string $resourceTranslationsAsyncUploadId)
    {
        $this->resource_translations_async_upload_id = $resourceTranslationsAsyncUploadId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{resource_translations_async_upload_id}'], [$this->resource_translations_async_upload_id], '/resource_translations_async_uploads/{resource_translations_async_upload_id}');
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
     * @throws GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdBadRequestException
     * @throws GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdUnauthorizedException
     * @throws GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdForbiddenException
     * @throws GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdNotFoundException
     * @throws GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): ResourceTranslationsAsyncUploadsResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, ResourceTranslationsAsyncUploadsResponse::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationsAsyncUploadByResourceTranslationsAsyncUploadIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, ResourceTranslationsAsyncUploadsResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
