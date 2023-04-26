<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchProjectsByProjectIdRelationshipsTeamBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchProjectsByProjectIdRelationshipsTeamForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchProjectsByProjectIdRelationshipsTeamInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchProjectsByProjectIdRelationshipsTeamNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchProjectsByProjectIdRelationshipsTeamUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectIdRelationshipsTeamRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PatchProjectsByProjectIdRelationshipsTeam extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $project_id;

    /**
     * Update team relationship to set a new team to the project.
     *
     * @param string $projectId format of composite id should be `o:organization_slug:p:project_slug`
     */
    public function __construct(string $projectId, PatchProjectsProjectIdRelationshipsTeamRequestBody $requestBody)
    {
        $this->project_id = $projectId;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{project_id}'], [$this->project_id], '/projects/{project_id}/relationships/team');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof PatchProjectsProjectIdRelationshipsTeamRequestBody) {
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
     * @throws PatchProjectsByProjectIdRelationshipsTeamBadRequestException
     * @throws PatchProjectsByProjectIdRelationshipsTeamUnauthorizedException
     * @throws PatchProjectsByProjectIdRelationshipsTeamForbiddenException
     * @throws PatchProjectsByProjectIdRelationshipsTeamNotFoundException
     * @throws PatchProjectsByProjectIdRelationshipsTeamInternalServerErrorException
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
            throw new PatchProjectsByProjectIdRelationshipsTeamBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchProjectsByProjectIdRelationshipsTeamUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchProjectsByProjectIdRelationshipsTeamForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchProjectsByProjectIdRelationshipsTeamNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchProjectsByProjectIdRelationshipsTeamInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }

        return null;

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
