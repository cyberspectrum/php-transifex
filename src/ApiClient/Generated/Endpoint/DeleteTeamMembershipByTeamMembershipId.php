<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteTeamMembershipByTeamMembershipIdBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteTeamMembershipByTeamMembershipIdConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteTeamMembershipByTeamMembershipIdForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteTeamMembershipByTeamMembershipIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteTeamMembershipByTeamMembershipIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteTeamMembershipByTeamMembershipIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared409Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class DeleteTeamMembershipByTeamMembershipId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $team_membership_id;

    /**
     * Delete team membership.
     */
    public function __construct(string $teamMembershipId)
    {
        $this->team_membership_id = $teamMembershipId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{team_membership_id}'], [$this->team_membership_id], '/team_memberships/{team_membership_id}');
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
     * @throws DeleteTeamMembershipByTeamMembershipIdBadRequestException
     * @throws DeleteTeamMembershipByTeamMembershipIdUnauthorizedException
     * @throws DeleteTeamMembershipByTeamMembershipIdForbiddenException
     * @throws DeleteTeamMembershipByTeamMembershipIdNotFoundException
     * @throws DeleteTeamMembershipByTeamMembershipIdConflictException
     * @throws DeleteTeamMembershipByTeamMembershipIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteTeamMembershipByTeamMembershipIdBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteTeamMembershipByTeamMembershipIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteTeamMembershipByTeamMembershipIdForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteTeamMembershipByTeamMembershipIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteTeamMembershipByTeamMembershipIdConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteTeamMembershipByTeamMembershipIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }

        return null;

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
