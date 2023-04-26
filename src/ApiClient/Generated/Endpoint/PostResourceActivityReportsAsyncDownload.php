<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceActivityReportsAsyncDownloadBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceActivityReportsAsyncDownloadConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceActivityReportsAsyncDownloadForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceActivityReportsAsyncDownloadInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceActivityReportsAsyncDownloadNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceActivityReportsAsyncDownloadUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceActivityReportsAsyncDownloadsRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceActivityReportsAsyncDownloadsResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared409Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostResourceActivityReportsAsyncDownload extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * The response represents the resource activity report download job. Check.
    the job's status and download the file itself once that is completed.
     */
    public function __construct(PostResourceActivityReportsAsyncDownloadsRequestBody $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/resource_activity_reports_async_downloads';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof PostResourceActivityReportsAsyncDownloadsRequestBody) {
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
     * @throws PostResourceActivityReportsAsyncDownloadBadRequestException
     * @throws PostResourceActivityReportsAsyncDownloadUnauthorizedException
     * @throws PostResourceActivityReportsAsyncDownloadForbiddenException
     * @throws PostResourceActivityReportsAsyncDownloadNotFoundException
     * @throws PostResourceActivityReportsAsyncDownloadConflictException
     * @throws PostResourceActivityReportsAsyncDownloadInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): ResourceActivityReportsAsyncDownloadsResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (202 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, ResourceActivityReportsAsyncDownloadsResponse::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceActivityReportsAsyncDownloadBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceActivityReportsAsyncDownloadUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceActivityReportsAsyncDownloadForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceActivityReportsAsyncDownloadNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceActivityReportsAsyncDownloadConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceActivityReportsAsyncDownloadInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, ResourceActivityReportsAsyncDownloadsResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
