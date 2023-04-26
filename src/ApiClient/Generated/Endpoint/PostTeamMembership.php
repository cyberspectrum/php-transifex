<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostTeamMembershipBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostTeamMembershipConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostTeamMembershipForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostTeamMembershipInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostTeamMembershipNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostTeamMembershipPaymentRequiredException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostTeamMembershipUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostTeamMembershipsRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared402Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared409Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\TeamMembershipsResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostTeamMembership extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Create a new team membership.
     */
    public function __construct(PostTeamMembershipsRequestBody $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/team_memberships';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof PostTeamMembershipsRequestBody) {
            return [['Content-Type' => ['application/vnd.api+json']], $serializer->serialize($this->body, 'json')];
        }

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
     * @throws PostTeamMembershipBadRequestException
     * @throws PostTeamMembershipUnauthorizedException
     * @throws PostTeamMembershipPaymentRequiredException
     * @throws PostTeamMembershipForbiddenException
     * @throws PostTeamMembershipNotFoundException
     * @throws PostTeamMembershipConflictException
     * @throws PostTeamMembershipInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): TeamMembershipsResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (201 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, TeamMembershipsResponse::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostTeamMembershipBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostTeamMembershipUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (402 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostTeamMembershipPaymentRequiredException($serializer->deserialize($body, ResponseShared402Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostTeamMembershipForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostTeamMembershipNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostTeamMembershipConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostTeamMembershipInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, TeamMembershipsResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
