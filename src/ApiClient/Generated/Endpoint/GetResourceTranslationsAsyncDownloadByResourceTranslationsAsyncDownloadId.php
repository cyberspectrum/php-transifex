<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdTooManyRequestsException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsAsyncDownloadsResponse;
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

class GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $resource_translations_async_download_id;

    /**
     * With this endpoint, you can inquire about the status of an translation download job.
     *
     * - If the value of the 'status' attribute is 'pending' or 'processing', you
     * should check this endpoint again later.
     * - If the 'status' is 'failed', the translation has failed to be compiled.
     * - In case the upload job has been successful, you will receive a "303 - See
     * Other" response and you can follow its `Location` to [download the file](#tag/File-Downloads/paths/get)
     * that have been extracted from your file.
     *
     * @param string $resourceTranslationsAsyncDownloadId format of the resource_translations_async_download_id should be a UUID
     */
    public function __construct(string $resourceTranslationsAsyncDownloadId)
    {
        $this->resource_translations_async_download_id = $resourceTranslationsAsyncDownloadId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{resource_translations_async_download_id}'], [$this->resource_translations_async_download_id], '/resource_translations_async_downloads/{resource_translations_async_download_id}');
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
     * @throws GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdUnauthorizedException
     * @throws GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdForbiddenException
     * @throws GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdNotFoundException
     * @throws GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdTooManyRequestsException
     * @throws GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): ?ResourceTranslationsAsyncDownloadsResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, ResourceTranslationsAsyncDownloadsResponse::class, 'json');
        }
        if (false === is_null($contentType) && (303 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return json_decode($body);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdTooManyRequestsException($serializer->deserialize($body, ResponseShared429Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, ResourceTranslationsAsyncDownloadsResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
