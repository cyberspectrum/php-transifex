<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostOrganizationActivityReportsAsyncDownloadBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostOrganizationActivityReportsAsyncDownloadConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostOrganizationActivityReportsAsyncDownloadForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostOrganizationActivityReportsAsyncDownloadInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostOrganizationActivityReportsAsyncDownloadNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostOrganizationActivityReportsAsyncDownloadUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\OrganizationActivityReportsAsyncDownloadsResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostOrganizationActivityReportsAsyncDownloadsRequestBody;
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

class PostOrganizationActivityReportsAsyncDownload extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * The response represents the organization activity report file download job.
    Check the job's status and download the file itself once that is completed.
     */
    public function __construct(PostOrganizationActivityReportsAsyncDownloadsRequestBody $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/organization_activity_reports_async_downloads';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof PostOrganizationActivityReportsAsyncDownloadsRequestBody) {
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
     * @throws PostOrganizationActivityReportsAsyncDownloadBadRequestException
     * @throws PostOrganizationActivityReportsAsyncDownloadUnauthorizedException
     * @throws PostOrganizationActivityReportsAsyncDownloadForbiddenException
     * @throws PostOrganizationActivityReportsAsyncDownloadNotFoundException
     * @throws PostOrganizationActivityReportsAsyncDownloadConflictException
     * @throws PostOrganizationActivityReportsAsyncDownloadInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): OrganizationActivityReportsAsyncDownloadsResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (202 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, OrganizationActivityReportsAsyncDownloadsResponse::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostOrganizationActivityReportsAsyncDownloadBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostOrganizationActivityReportsAsyncDownloadUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostOrganizationActivityReportsAsyncDownloadForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostOrganizationActivityReportsAsyncDownloadNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostOrganizationActivityReportsAsyncDownloadConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostOrganizationActivityReportsAsyncDownloadInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, OrganizationActivityReportsAsyncDownloadsResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
