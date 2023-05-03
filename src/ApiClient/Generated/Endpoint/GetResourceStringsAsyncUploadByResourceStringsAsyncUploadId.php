<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringsAsyncUploadByResourceStringsAsyncUploadIdForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringsAsyncUploadByResourceStringsAsyncUploadIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringsAsyncUploadByResourceStringsAsyncUploadIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringsAsyncUploadByResourceStringsAsyncUploadIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceStringsAsyncUploadsResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetResourceStringsAsyncUploadByResourceStringsAsyncUploadId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $resource_strings_async_upload_id;

    /**
     * With this endpoint, you can inquire about the status of a source upload job.

     *
     * @param string $resourceStringsAsyncUploadId format of the resource_strings_async_upload_id should be a UUID
     */
    public function __construct(string $resourceStringsAsyncUploadId)
    {
        $this->resource_strings_async_upload_id = $resourceStringsAsyncUploadId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{resource_strings_async_upload_id}'], [$this->resource_strings_async_upload_id], '/resource_strings_async_uploads/{resource_strings_async_upload_id}');
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
     * @throws GetResourceStringsAsyncUploadByResourceStringsAsyncUploadIdUnauthorizedException
     * @throws GetResourceStringsAsyncUploadByResourceStringsAsyncUploadIdForbiddenException
     * @throws GetResourceStringsAsyncUploadByResourceStringsAsyncUploadIdNotFoundException
     * @throws GetResourceStringsAsyncUploadByResourceStringsAsyncUploadIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): ResourceStringsAsyncUploadsResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, ResourceStringsAsyncUploadsResponse::class, 'json');
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringsAsyncUploadByResourceStringsAsyncUploadIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringsAsyncUploadByResourceStringsAsyncUploadIdForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringsAsyncUploadByResourceStringsAsyncUploadIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringsAsyncUploadByResourceStringsAsyncUploadIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, ResourceStringsAsyncUploadsResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
