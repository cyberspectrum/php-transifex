<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchTeamsByTeamIdRelationshipsManagerBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchTeamsByTeamIdRelationshipsManagerForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchTeamsByTeamIdRelationshipsManagerInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchTeamsByTeamIdRelationshipsManagerNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchTeamsByTeamIdRelationshipsManagerPaymentRequiredException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchTeamsByTeamIdRelationshipsManagerUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\IdRelationshipsRequestBody;
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
use Symfony\Component\Serializer\SerializerInterface;

class PatchTeamsByTeamIdRelationshipsManager extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $team_id;

    /**
     * Completely replace team managers.
     *
     * _**Warning**: This is a highly destructive operation._
     *
     * @param string $teamId format of composite id should be `o:organization_slug:t:team_slug`
     */
    public function __construct(string $teamId, IdRelationshipsRequestBody $requestBody)
    {
        $this->team_id = $teamId;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{team_id}'], [$this->team_id], '/teams/{team_id}/relationships/managers');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof IdRelationshipsRequestBody) {
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
     * @return null
     *
     * @throws PatchTeamsByTeamIdRelationshipsManagerBadRequestException
     * @throws PatchTeamsByTeamIdRelationshipsManagerUnauthorizedException
     * @throws PatchTeamsByTeamIdRelationshipsManagerPaymentRequiredException
     * @throws PatchTeamsByTeamIdRelationshipsManagerForbiddenException
     * @throws PatchTeamsByTeamIdRelationshipsManagerNotFoundException
     * @throws PatchTeamsByTeamIdRelationshipsManagerInternalServerErrorException
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
            throw new PatchTeamsByTeamIdRelationshipsManagerBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchTeamsByTeamIdRelationshipsManagerUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (402 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchTeamsByTeamIdRelationshipsManagerPaymentRequiredException($serializer->deserialize($body, ResponseShared402Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchTeamsByTeamIdRelationshipsManagerForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchTeamsByTeamIdRelationshipsManagerNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchTeamsByTeamIdRelationshipsManagerInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }

        return null;

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
