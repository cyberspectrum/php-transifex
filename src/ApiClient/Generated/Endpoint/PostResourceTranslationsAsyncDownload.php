<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceTranslationsAsyncDownloadBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceTranslationsAsyncDownloadConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceTranslationsAsyncDownloadForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceTranslationsAsyncDownloadInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceTranslationsAsyncDownloadNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceTranslationsAsyncDownloadTooManyRequestsException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceTranslationsAsyncDownloadUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceTranslationsAsyncDownloadsRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsAsyncDownloadsResponse;
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

class PostResourceTranslationsAsyncDownload extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * The response represents the file download job. Check the job's status
     * and download the file itself once that is completed.
     */
    public function __construct(PostResourceTranslationsAsyncDownloadsRequestBody $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/resource_translations_async_downloads';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof PostResourceTranslationsAsyncDownloadsRequestBody) {
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
     * @throws PostResourceTranslationsAsyncDownloadBadRequestException
     * @throws PostResourceTranslationsAsyncDownloadUnauthorizedException
     * @throws PostResourceTranslationsAsyncDownloadForbiddenException
     * @throws PostResourceTranslationsAsyncDownloadNotFoundException
     * @throws PostResourceTranslationsAsyncDownloadConflictException
     * @throws PostResourceTranslationsAsyncDownloadTooManyRequestsException
     * @throws PostResourceTranslationsAsyncDownloadInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): ResourceTranslationsAsyncDownloadsResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (202 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, ResourceTranslationsAsyncDownloadsResponse::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceTranslationsAsyncDownloadBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceTranslationsAsyncDownloadUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceTranslationsAsyncDownloadForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceTranslationsAsyncDownloadNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceTranslationsAsyncDownloadConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceTranslationsAsyncDownloadTooManyRequestsException($serializer->deserialize($body, ResponseShared429Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceTranslationsAsyncDownloadInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, ResourceTranslationsAsyncDownloadsResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
