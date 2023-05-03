<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetContextScreenshotMapByContextScreenshotMapIdConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetContextScreenshotMapByContextScreenshotMapIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetContextScreenshotMapByContextScreenshotMapIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetContextScreenshotMapByContextScreenshotMapIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetContextScreenshotMapsContextScreenshotMapId200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared409Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetContextScreenshotMapByContextScreenshotMapId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $context_screenshot_map_id;

    /**
     * Get details for a context screenshot map.
     */
    public function __construct(string $contextScreenshotMapId)
    {
        $this->context_screenshot_map_id = $contextScreenshotMapId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{context_screenshot_map_id}'], [$this->context_screenshot_map_id], '/context_screenshot_maps/{context_screenshot_map_id}');
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
     * @throws GetContextScreenshotMapByContextScreenshotMapIdUnauthorizedException
     * @throws GetContextScreenshotMapByContextScreenshotMapIdNotFoundException
     * @throws GetContextScreenshotMapByContextScreenshotMapIdConflictException
     * @throws GetContextScreenshotMapByContextScreenshotMapIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): GetContextScreenshotMapsContextScreenshotMapId200Response
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, GetContextScreenshotMapsContextScreenshotMapId200Response::class, 'json');
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetContextScreenshotMapByContextScreenshotMapIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetContextScreenshotMapByContextScreenshotMapIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetContextScreenshotMapByContextScreenshotMapIdConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetContextScreenshotMapByContextScreenshotMapIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, GetContextScreenshotMapsContextScreenshotMapId200Response::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
