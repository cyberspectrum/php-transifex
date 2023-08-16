<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetTeamMembershipBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetTeamMembershipForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetTeamMembershipInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetTeamMembershipNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetTeamMembershipUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetTeamMemberships200Response;
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

class GetTeamMembership extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * List team memberships.
     *
     * @param array $queryParameters {
     *
     * @var string $filter[organization] Filter results by an organization
     * @var string $filter[team] Filter results by a team
     * @var string $filter[language] Filter results by a language
     * @var string $filter[user] Filter results by a user
     * @var string $filter[role] Filter results by role
     * @var string $page[cursor] The cursor used for pagination. The value of the cursor must be retrieved from pagination links included in previous responses; you should not attempt to write them on your own.
     * @var string $include
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
        return '/team_memberships';
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
        $optionsResolver->setDefined(['filter[organization]', 'filter[team]', 'filter[language]', 'filter[user]', 'filter[role]', 'page[cursor]', 'include']);
        $optionsResolver->setRequired(['filter[organization]']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('filter[organization]', ['string']);
        $optionsResolver->addAllowedTypes('filter[team]', ['string']);
        $optionsResolver->addAllowedTypes('filter[language]', ['string']);
        $optionsResolver->addAllowedTypes('filter[user]', ['string']);
        $optionsResolver->addAllowedTypes('filter[role]', ['string']);
        $optionsResolver->addAllowedTypes('page[cursor]', ['string']);
        $optionsResolver->addAllowedTypes('include', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @throws GetTeamMembershipBadRequestException
     * @throws GetTeamMembershipUnauthorizedException
     * @throws GetTeamMembershipForbiddenException
     * @throws GetTeamMembershipNotFoundException
     * @throws GetTeamMembershipInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): GetTeamMemberships200Response
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, GetTeamMemberships200Response::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetTeamMembershipBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetTeamMembershipUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetTeamMembershipForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetTeamMembershipNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetTeamMembershipInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, GetTeamMemberships200Response::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
