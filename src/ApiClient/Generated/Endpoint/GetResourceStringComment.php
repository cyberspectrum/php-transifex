<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringCommentBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringCommentInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringCommentNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringCommentUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceStringComments200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetResourceStringComment extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Get a list of all resource string comments for an organization. You can further narrow down the list using the available filters.
     *
     * @param array $queryParameters {
     *
     *     @var string $filter[organization] Filter results by an organization
     *     @var string $filter[project] Filter results by a project
     *     @var string $page[cursor] The cursor used for pagination. The value of the cursor must be retrieved from pagination links included in previous responses; you should not attempt to write them on your own.
     *     @var string $filter[category]
     *     @var string $filter[author]
     *     @var string $filter[datetime_created][gte]
     *     @var string $filter[datetime_created][lt]
     *     @var string $filter[priority]
     *     @var string $filter[resource]
     *     @var string $filter[resource_string]
     *     @var string $filter[status]
     *     @var string $filter[type]
     * }
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
        return '/resource_string_comments';
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
        $optionsResolver->setDefined(['filter[organization]', 'filter[project]', 'page[cursor]', 'filter[category]', 'filter[author]', 'filter[datetime_created][gte]', 'filter[datetime_created][lt]', 'filter[priority]', 'filter[resource]', 'filter[resource_string]', 'filter[status]', 'filter[type]']);
        $optionsResolver->setRequired(['filter[organization]']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('filter[organization]', ['string']);
        $optionsResolver->addAllowedTypes('filter[project]', ['string']);
        $optionsResolver->addAllowedTypes('page[cursor]', ['string']);
        $optionsResolver->addAllowedTypes('filter[category]', ['string']);
        $optionsResolver->addAllowedTypes('filter[author]', ['string']);
        $optionsResolver->addAllowedTypes('filter[datetime_created][gte]', ['string']);
        $optionsResolver->addAllowedTypes('filter[datetime_created][lt]', ['string']);
        $optionsResolver->addAllowedTypes('filter[priority]', ['string']);
        $optionsResolver->addAllowedTypes('filter[resource]', ['string']);
        $optionsResolver->addAllowedTypes('filter[resource_string]', ['string']);
        $optionsResolver->addAllowedTypes('filter[status]', ['string']);
        $optionsResolver->addAllowedTypes('filter[type]', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws GetResourceStringCommentBadRequestException
     * @throws GetResourceStringCommentUnauthorizedException
     * @throws GetResourceStringCommentNotFoundException
     * @throws GetResourceStringCommentInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): GetResourceStringComments200Response
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, GetResourceStringComments200Response::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringCommentBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringCommentUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringCommentNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringCommentInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, GetResourceStringComments200Response::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
