<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchTeamMembershipByTeamMembershipIdBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchTeamMembershipByTeamMembershipIdConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchTeamMembershipByTeamMembershipIdForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchTeamMembershipByTeamMembershipIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchTeamMembershipByTeamMembershipIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchTeamMembershipByTeamMembershipIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchTeamMembershipsTeamMembershipIdRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
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

class PatchTeamMembershipByTeamMembershipId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $team_membership_id;

    /**
     * Update a membership's role.

    [here](https://help.transifex.com/en/articles/6223458-managing-and-removing-collaborators#h_66d1be4260)
     */
    public function __construct(string $teamMembershipId, PatchTeamMembershipsTeamMembershipIdRequestBody $requestBody)
    {
        $this->team_membership_id = $teamMembershipId;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{team_membership_id}'], [$this->team_membership_id], '/team_memberships/{team_membership_id}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof PatchTeamMembershipsTeamMembershipIdRequestBody) {
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
     * @throws PatchTeamMembershipByTeamMembershipIdBadRequestException
     * @throws PatchTeamMembershipByTeamMembershipIdUnauthorizedException
     * @throws PatchTeamMembershipByTeamMembershipIdForbiddenException
     * @throws PatchTeamMembershipByTeamMembershipIdNotFoundException
     * @throws PatchTeamMembershipByTeamMembershipIdConflictException
     * @throws PatchTeamMembershipByTeamMembershipIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): TeamMembershipsResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, TeamMembershipsResponse::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchTeamMembershipByTeamMembershipIdBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchTeamMembershipByTeamMembershipIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchTeamMembershipByTeamMembershipIdForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchTeamMembershipByTeamMembershipIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchTeamMembershipByTeamMembershipIdConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchTeamMembershipByTeamMembershipIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, TeamMembershipsResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
