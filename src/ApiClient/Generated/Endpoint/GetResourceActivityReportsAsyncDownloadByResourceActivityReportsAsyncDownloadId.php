<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceActivityReportsAsyncDownloadByResourceActivityReportsAsyncDownloadIdForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceActivityReportsAsyncDownloadByResourceActivityReportsAsyncDownloadIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceActivityReportsAsyncDownloadByResourceActivityReportsAsyncDownloadIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceActivityReportsAsyncDownloadByResourceActivityReportsAsyncDownloadIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceActivityReportsAsyncDownloadsResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetResourceActivityReportsAsyncDownloadByResourceActivityReportsAsyncDownloadId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $resource_activity_reports_async_download_id;

    /**
     * With this endpoint, you can inquire about the status of an resource.
     *
     * @param string $resourceActivityReportsAsyncDownloadId Format of the resource_activity_reports_async_download_id should be a
    UUID.
     */
    public function __construct(string $resourceActivityReportsAsyncDownloadId)
    {
        $this->resource_activity_reports_async_download_id = $resourceActivityReportsAsyncDownloadId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{resource_activity_reports_async_download_id}'], [$this->resource_activity_reports_async_download_id], '/resource_activity_reports_async_downloads/{resource_activity_reports_async_download_id}');
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
     * @throws GetResourceActivityReportsAsyncDownloadByResourceActivityReportsAsyncDownloadIdUnauthorizedException
     * @throws GetResourceActivityReportsAsyncDownloadByResourceActivityReportsAsyncDownloadIdForbiddenException
     * @throws GetResourceActivityReportsAsyncDownloadByResourceActivityReportsAsyncDownloadIdNotFoundException
     * @throws GetResourceActivityReportsAsyncDownloadByResourceActivityReportsAsyncDownloadIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): ?ResourceActivityReportsAsyncDownloadsResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, ResourceActivityReportsAsyncDownloadsResponse::class, 'json');
        }
        if (false === is_null($contentType) && (303 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return json_decode($body);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceActivityReportsAsyncDownloadByResourceActivityReportsAsyncDownloadIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceActivityReportsAsyncDownloadByResourceActivityReportsAsyncDownloadIdForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceActivityReportsAsyncDownloadByResourceActivityReportsAsyncDownloadIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceActivityReportsAsyncDownloadByResourceActivityReportsAsyncDownloadIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, ResourceActivityReportsAsyncDownloadsResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
