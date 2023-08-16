<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationTooManyRequestsException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetResourceTranslationUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceTranslations200Response;
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
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetResourceTranslation extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * @param array $queryParameters {
     *
     * @var string $filter[resource] Filter results by a resource
     * @var string $filter[language] Filter results by a language
     * @var string $page[cursor] The cursor used for pagination. The value of the cursor must be retrieved from pagination links included in previous responses; you should not attempt to write them on your own.
     * @var string $filter[date_translated][gt]
     * @var string $filter[date_translated][lt]
     * @var string $filter[resource_string][key]
     * @var string $filter[resource_string][date_modified][gte]
     * @var string $filter[resource_string][date_modified][lte]
     * @var bool   $filter[translated]
     * @var bool   $filter[reviewed]
     * @var bool   $filter[proofread]
     * @var bool   $filter[finalized]
     * @var string $filter[translator]
     * @var string $include use the value `resource_string` to get the list of resource string objects in the response
     * @var array  $filter[resource_string][tags][all] Retrieve translation strings containing all of the query tags
     * @var string $limit The page size limit. If not set, the default value is 150. <br> If set, the minimum value it can take is 150 and the maximum 1000.
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
        return '/resource_translations';
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
        $optionsResolver->setDefined(['filter[resource]', 'filter[language]', 'page[cursor]', 'filter[date_translated][gt]', 'filter[date_translated][lt]', 'filter[resource_string][key]', 'filter[resource_string][date_modified][gte]', 'filter[resource_string][date_modified][lte]', 'filter[translated]', 'filter[reviewed]', 'filter[proofread]', 'filter[finalized]', 'filter[translator]', 'include', 'filter[resource_string][tags][all]', 'limit']);
        $optionsResolver->setRequired(['filter[resource]', 'filter[language]']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('filter[resource]', ['string']);
        $optionsResolver->addAllowedTypes('filter[language]', ['string']);
        $optionsResolver->addAllowedTypes('page[cursor]', ['string']);
        $optionsResolver->addAllowedTypes('filter[date_translated][gt]', ['string']);
        $optionsResolver->addAllowedTypes('filter[date_translated][lt]', ['string']);
        $optionsResolver->addAllowedTypes('filter[resource_string][key]', ['string']);
        $optionsResolver->addAllowedTypes('filter[resource_string][date_modified][gte]', ['string']);
        $optionsResolver->addAllowedTypes('filter[resource_string][date_modified][lte]', ['string']);
        $optionsResolver->addAllowedTypes('filter[translated]', ['bool']);
        $optionsResolver->addAllowedTypes('filter[reviewed]', ['bool']);
        $optionsResolver->addAllowedTypes('filter[proofread]', ['bool']);
        $optionsResolver->addAllowedTypes('filter[finalized]', ['bool']);
        $optionsResolver->addAllowedTypes('filter[translator]', ['string']);
        $optionsResolver->addAllowedTypes('include', ['string']);
        $optionsResolver->addAllowedTypes('filter[resource_string][tags][all]', ['array']);
        $optionsResolver->addAllowedTypes('limit', ['string', 'null']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws GetResourceTranslationBadRequestException
     * @throws GetResourceTranslationUnauthorizedException
     * @throws GetResourceTranslationForbiddenException
     * @throws GetResourceTranslationNotFoundException
     * @throws GetResourceTranslationConflictException
     * @throws GetResourceTranslationTooManyRequestsException
     * @throws GetResourceTranslationInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): GetResourceTranslations200Response
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, GetResourceTranslations200Response::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationTooManyRequestsException($serializer->deserialize($body, ResponseShared429Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetResourceTranslationInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, GetResourceTranslations200Response::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
