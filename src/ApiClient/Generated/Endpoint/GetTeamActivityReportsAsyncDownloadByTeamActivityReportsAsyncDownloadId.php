<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetTeamActivityReportsAsyncDownloadByTeamActivityReportsAsyncDownloadIdForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetTeamActivityReportsAsyncDownloadByTeamActivityReportsAsyncDownloadIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetTeamActivityReportsAsyncDownloadByTeamActivityReportsAsyncDownloadIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetTeamActivityReportsAsyncDownloadByTeamActivityReportsAsyncDownloadIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\TeamActivityReportsAsyncDownloadsResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetTeamActivityReportsAsyncDownloadByTeamActivityReportsAsyncDownloadId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $team_activity_reports_async_download_id;

    /**
     * With this endpoint, you can inquire about the status of an team
     * activity report download job.
     *
     * - If the value of the 'status' attribute is 'pending' or 'processing', you
     * should check this endpoint again later.
     * - If the 'status' is 'failed', the report has failed to be compiled.
     * - In case the upload job has been successful, you will receive a "303 - See
     * Other" response and you can follow its `Location` to
     * [download the file](#tag/File-Downloads/paths/get) that have been
     * extracted from your file.
     *
     * @param string $teamActivityReportsAsyncDownloadId format of the team_activity_reports_async_download_id should be
     *                                                   a UUID
     */
    public function __construct(string $teamActivityReportsAsyncDownloadId)
    {
        $this->team_activity_reports_async_download_id = $teamActivityReportsAsyncDownloadId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{team_activity_reports_async_download_id}'], [$this->team_activity_reports_async_download_id], '/team_activity_reports_async_downloads/{team_activity_reports_async_download_id}');
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
     * @throws GetTeamActivityReportsAsyncDownloadByTeamActivityReportsAsyncDownloadIdUnauthorizedException
     * @throws GetTeamActivityReportsAsyncDownloadByTeamActivityReportsAsyncDownloadIdForbiddenException
     * @throws GetTeamActivityReportsAsyncDownloadByTeamActivityReportsAsyncDownloadIdNotFoundException
     * @throws GetTeamActivityReportsAsyncDownloadByTeamActivityReportsAsyncDownloadIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): ?TeamActivityReportsAsyncDownloadsResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, TeamActivityReportsAsyncDownloadsResponse::class, 'json');
        }
        if (false === is_null($contentType) && (303 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return json_decode($body);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetTeamActivityReportsAsyncDownloadByTeamActivityReportsAsyncDownloadIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetTeamActivityReportsAsyncDownloadByTeamActivityReportsAsyncDownloadIdForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetTeamActivityReportsAsyncDownloadByTeamActivityReportsAsyncDownloadIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetTeamActivityReportsAsyncDownloadByTeamActivityReportsAsyncDownloadIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, TeamActivityReportsAsyncDownloadsResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
