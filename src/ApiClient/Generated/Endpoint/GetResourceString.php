<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringTooManyRequestsException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceStringUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceStrings200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared409Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared429Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetResourceString extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param array $queryParameters {
     *
     *     @var string $filter[resource] Filter results by a resource
     *     @var string $page[cursor] The cursor used for pagination. The value of the cursor must be retrieved from pagination links included in previous responses; you should not attempt to write them on your own.
     *     @var string $filter[strings_date_modified][gte]
     *     @var string $filter[strings_date_modified][lte]
     *     @var string $filter[key] Exact match for the key of the resource string. This filter is case sensitive.
     *     @var array $filter[tags][all] Retrieve source strings containing all of the query tags
     *     @var string $limit The page size limit. If not set, the default value is 150. <br> If set, the minimum value it can take is 150 and the maximum 1000.
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
        return '/resource_strings';
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
        $optionsResolver->setDefined(['filter[resource]', 'page[cursor]', 'filter[strings_date_modified][gte]', 'filter[strings_date_modified][lte]', 'filter[key]', 'filter[tags][all]', 'limit']);
        $optionsResolver->setRequired(['filter[resource]']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('filter[resource]', ['string']);
        $optionsResolver->addAllowedTypes('page[cursor]', ['string']);
        $optionsResolver->addAllowedTypes('filter[strings_date_modified][gte]', ['string']);
        $optionsResolver->addAllowedTypes('filter[strings_date_modified][lte]', ['string']);
        $optionsResolver->addAllowedTypes('filter[key]', ['string']);
        $optionsResolver->addAllowedTypes('filter[tags][all]', ['array']);
        $optionsResolver->addAllowedTypes('limit', ['string', 'null']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws GetResourceStringBadRequestException
     * @throws GetResourceStringUnauthorizedException
     * @throws GetResourceStringForbiddenException
     * @throws GetResourceStringNotFoundException
     * @throws GetResourceStringConflictException
     * @throws GetResourceStringTooManyRequestsException
     * @throws GetResourceStringInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): GetResourceStrings200Response
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, GetResourceStrings200Response::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringNotFoundException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringTooManyRequestsException($serializer->deserialize($body, ResponseShared429Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceStringInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, GetResourceStrings200Response::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
