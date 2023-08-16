<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetContextScreenshotMapBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetContextScreenshotMapConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetContextScreenshotMapInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetContextScreenshotMapNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetContextScreenshotMapUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetContextScreenshotMaps200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared409Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetContextScreenshotMap extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Get the context screenshots maps for a project. You can further narrow down the list using the available filters.
     *
     * @param array $queryParameters {
     *
     * @var string $filter[project] Filter results by a project
     * @var string $filter[resource] Filter results by a resource
     * @var string $filter[resource_string]
     * @var string $filter[context_screenshot] Retrieve maps related to a specific context screenshot
     * @var string $page[cursor] The cursor used for pagination. The value of the cursor must be retrieved from pagination links included in previous responses; you should not attempt to write them on your own.
     *             }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/context_screenshot_maps';
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

    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['filter[project]', 'filter[resource]', 'filter[resource_string]', 'filter[context_screenshot]', 'page[cursor]']);
        $optionsResolver->setRequired(['filter[project]']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('filter[project]', ['string']);
        $optionsResolver->addAllowedTypes('filter[resource]', ['string']);
        $optionsResolver->addAllowedTypes('filter[resource_string]', ['string']);
        $optionsResolver->addAllowedTypes('filter[context_screenshot]', ['string']);
        $optionsResolver->addAllowedTypes('page[cursor]', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws GetContextScreenshotMapBadRequestException
     * @throws GetContextScreenshotMapUnauthorizedException
     * @throws GetContextScreenshotMapNotFoundException
     * @throws GetContextScreenshotMapConflictException
     * @throws GetContextScreenshotMapInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): GetContextScreenshotMaps200Response
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, GetContextScreenshotMaps200Response::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetContextScreenshotMapBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetContextScreenshotMapUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetContextScreenshotMapNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetContextScreenshotMapConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetContextScreenshotMapInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, GetContextScreenshotMaps200Response::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
