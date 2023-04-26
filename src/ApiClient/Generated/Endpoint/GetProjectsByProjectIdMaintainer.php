<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetProjectsByProjectIdMaintainerBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetProjectsByProjectIdMaintainerForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetProjectsByProjectIdMaintainerInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetProjectsByProjectIdMaintainerNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetProjectsByProjectIdMaintainerUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetProjectsProjectIdMaintainers200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectsByProjectIdMaintainer extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $project_id;

    /**
     * Get the maintainers of a project.
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
        return str_replace(['{project_id}'], [$this->project_id], '/projects/{project_id}/maintainers');
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
     * @throws GetProjectsByProjectIdMaintainerBadRequestException
     * @throws GetProjectsByProjectIdMaintainerUnauthorizedException
     * @throws GetProjectsByProjectIdMaintainerForbiddenException
     * @throws GetProjectsByProjectIdMaintainerNotFoundException
     * @throws GetProjectsByProjectIdMaintainerInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): GetProjectsProjectIdMaintainers200Response
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, GetProjectsProjectIdMaintainers200Response::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetProjectsByProjectIdMaintainerBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetProjectsByProjectIdMaintainerUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetProjectsByProjectIdMaintainerForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetProjectsByProjectIdMaintainerNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetProjectsByProjectIdMaintainerInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, GetProjectsProjectIdMaintainers200Response::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
