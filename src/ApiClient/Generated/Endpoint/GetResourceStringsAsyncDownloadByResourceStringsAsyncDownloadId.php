<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdTooManyRequestsException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceStringsAsyncDownloadsResponse;
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

class GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $resource_strings_async_download_id;

    /**
     * With this endpoint, you can inquire about the status of a resource strings download job.
     *
     * - If the value of the 'status' attribute is 'pending' or 'processing', you
     * should check this endpoint again later.
     * - If the 'status' is 'failed', the source file has failed to be compiled.
     * - In case the download job has been successful, you will receive a "303 - See
     * Other" response and you can follow its `Location` to [download the file](#tag/File-Downloads/paths/get)
     * that have been extracted from your file.
     *
     * @param string $resourceStringsAsyncDownloadId format of the resource_strings_async_download_id should be `o:organization_slug:p:project_slug:r:resource_slug`
     */
    public function __construct(string $resourceStringsAsyncDownloadId)
    {
        $this->resource_strings_async_download_id = $resourceStringsAsyncDownloadId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{resource_strings_async_download_id}'], [$this->resource_strings_async_download_id], '/resource_strings_async_downloads/{resource_strings_async_download_id}');
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
     * @throws GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdUnauthorizedException
     * @throws GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdForbiddenException
     * @throws GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdNotFoundException
     * @throws GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdTooManyRequestsException
     * @throws GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): ?ResourceStringsAsyncDownloadsResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, ResourceStringsAsyncDownloadsResponse::class, 'json');
        }
        if (false === is_null($contentType) && (303 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return json_decode($body);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdTooManyRequestsException($serializer->deserialize($body, ResponseShared429Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, ResourceStringsAsyncDownloadsResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
