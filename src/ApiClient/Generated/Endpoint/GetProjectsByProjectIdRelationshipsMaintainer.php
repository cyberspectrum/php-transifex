<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetProjectsByProjectIdRelationshipsMaintainerBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetProjectsByProjectIdRelationshipsMaintainerForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetProjectsByProjectIdRelationshipsMaintainerInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetProjectsByProjectIdRelationshipsMaintainerNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetProjectsByProjectIdRelationshipsMaintainerPaymentRequiredException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetProjectsByProjectIdRelationshipsMaintainerUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetProjectsProjectIdRelationshipsMaintainers200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared402Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsByProjectIdRelationshipsMaintainer extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $project_id;

    /**
     * Get project maintainer relationships.
     *
     * @param string $projectId       format of composite id should be `o:organization_slug:p:project_slug`
     * @param array  $queryParameters {
     *
     *     @var string $page[cursor] The cursor used for pagination. The value of the cursor must be retrieved from pagination links included in previous responses; you should not attempt to write them on your own.
     * }
     */
    public function __construct(string $projectId, array $queryParameters = [])
    {
        $this->project_id = $projectId;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{project_id}'], [$this->project_id], '/projects/{project_id}/relationships/maintainers');
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
        $optionsResolver->setDefined(['page[cursor]']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('page[cursor]', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws GetProjectsByProjectIdRelationshipsMaintainerBadRequestException
     * @throws GetProjectsByProjectIdRelationshipsMaintainerUnauthorizedException
     * @throws GetProjectsByProjectIdRelationshipsMaintainerPaymentRequiredException
     * @throws GetProjectsByProjectIdRelationshipsMaintainerForbiddenException
     * @throws GetProjectsByProjectIdRelationshipsMaintainerNotFoundException
     * @throws GetProjectsByProjectIdRelationshipsMaintainerInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): GetProjectsProjectIdRelationshipsMaintainers200Response
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, GetProjectsProjectIdRelationshipsMaintainers200Response::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetProjectsByProjectIdRelationshipsMaintainerBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetProjectsByProjectIdRelationshipsMaintainerUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (402 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetProjectsByProjectIdRelationshipsMaintainerPaymentRequiredException($serializer->deserialize($body, ResponseShared402Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetProjectsByProjectIdRelationshipsMaintainerForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetProjectsByProjectIdRelationshipsMaintainerNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetProjectsByProjectIdRelationshipsMaintainerInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, GetProjectsProjectIdRelationshipsMaintainers200Response::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
