<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceLanguageStatByResourceLanguageStatsIdBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceLanguageStatByResourceLanguageStatsIdForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceLanguageStatByResourceLanguageStatsIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceLanguageStatByResourceLanguageStatsIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceLanguageStatByResourceLanguageStatsIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceLanguageStatsResourceLanguageStatsId200Response;
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

class GetResourceLanguageStatByResourceLanguageStatsId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $resource_language_stats_id;

    /**
     * Get information for a specific supported language.
     */
    public function __construct(string $resourceLanguageStatsId)
    {
        $this->resource_language_stats_id = $resourceLanguageStatsId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{resource_language_stats_id}'], [$this->resource_language_stats_id], '/resource_language_stats/{resource_language_stats_id}');
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
     * @throws GetResourceLanguageStatByResourceLanguageStatsIdBadRequestException
     * @throws GetResourceLanguageStatByResourceLanguageStatsIdUnauthorizedException
     * @throws GetResourceLanguageStatByResourceLanguageStatsIdForbiddenException
     * @throws GetResourceLanguageStatByResourceLanguageStatsIdNotFoundException
     * @throws GetResourceLanguageStatByResourceLanguageStatsIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): GetResourceLanguageStatsResourceLanguageStatsId200Response
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, GetResourceLanguageStatsResourceLanguageStatsId200Response::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceLanguageStatByResourceLanguageStatsIdBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceLanguageStatByResourceLanguageStatsIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceLanguageStatByResourceLanguageStatsIdForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceLanguageStatByResourceLanguageStatsIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceLanguageStatByResourceLanguageStatsIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, GetResourceLanguageStatsResourceLanguageStatsId200Response::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
