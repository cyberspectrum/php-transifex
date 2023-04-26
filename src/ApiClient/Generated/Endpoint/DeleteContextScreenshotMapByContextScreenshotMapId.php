<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteContextScreenshotMapByContextScreenshotMapIdConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteContextScreenshotMapByContextScreenshotMapIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteContextScreenshotMapByContextScreenshotMapIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteContextScreenshotMapByContextScreenshotMapIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared409Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class DeleteContextScreenshotMapByContextScreenshotMapId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $context_screenshot_map_id;

    /**
     * Delete a context screenshot map.
     */
    public function __construct(string $contextScreenshotMapId)
    {
        $this->context_screenshot_map_id = $contextScreenshotMapId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
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
     * @return null
     *
     * @throws DeleteContextScreenshotMapByContextScreenshotMapIdUnauthorizedException
     * @throws DeleteContextScreenshotMapByContextScreenshotMapIdNotFoundException
     * @throws DeleteContextScreenshotMapByContextScreenshotMapIdConflictException
     * @throws DeleteContextScreenshotMapByContextScreenshotMapIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteContextScreenshotMapByContextScreenshotMapIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteContextScreenshotMapByContextScreenshotMapIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteContextScreenshotMapByContextScreenshotMapIdConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteContextScreenshotMapByContextScreenshotMapIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }

        return null;

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
