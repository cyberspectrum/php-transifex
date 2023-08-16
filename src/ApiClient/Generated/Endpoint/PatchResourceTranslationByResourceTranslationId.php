<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchResourceTranslationByResourceTranslationIdBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchResourceTranslationByResourceTranslationIdConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchResourceTranslationByResourceTranslationIdForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchResourceTranslationByResourceTranslationIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchResourceTranslationByResourceTranslationIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchResourceTranslationByResourceTranslationIdTooManyRequestsException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchResourceTranslationByResourceTranslationIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourceTranslationsResourceTranslationId200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourceTranslationsResourceTranslationIdRequestBody;
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
use Symfony\Component\Serializer\SerializerInterface;

class PatchResourceTranslationByResourceTranslationId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $resource_translation_id;

    /**
     * Allows to add/update/remove content for Resource Translations as well as
     * reviewing/unreviewing existing work.
     *
     * When not all of the attributes are supplied in the request, these are interpreted as
     * if they were included with their current value.
     * The only exception in this rule is when `strings` are modified,
     * the resource translation is by default unreviewed unless otherwise specified
     * (with the `reviewed`/`proofread` attributes on the request body).
     *
     * @param string $resourceTranslationId Format of the Resource Translation id. Should be `o:organization_slug:p:project_slug:r:resource_slug:s:string_hash:l:language_code`.
     */
    public function __construct(string $resourceTranslationId, PatchResourceTranslationsResourceTranslationIdRequestBody $requestBody)
    {
        $this->resource_translation_id = $resourceTranslationId;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{resource_translation_id}'], [$this->resource_translation_id], '/resource_translations/{resource_translation_id}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof PatchResourceTranslationsResourceTranslationIdRequestBody) {
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
     * @throws PatchResourceTranslationByResourceTranslationIdBadRequestException
     * @throws PatchResourceTranslationByResourceTranslationIdUnauthorizedException
     * @throws PatchResourceTranslationByResourceTranslationIdForbiddenException
     * @throws PatchResourceTranslationByResourceTranslationIdNotFoundException
     * @throws PatchResourceTranslationByResourceTranslationIdConflictException
     * @throws PatchResourceTranslationByResourceTranslationIdTooManyRequestsException
     * @throws PatchResourceTranslationByResourceTranslationIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): PatchResourceTranslationsResourceTranslationId200Response
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, PatchResourceTranslationsResourceTranslationId200Response::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchResourceTranslationByResourceTranslationIdBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchResourceTranslationByResourceTranslationIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchResourceTranslationByResourceTranslationIdForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchResourceTranslationByResourceTranslationIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchResourceTranslationByResourceTranslationIdConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchResourceTranslationByResourceTranslationIdTooManyRequestsException($serializer->deserialize($body, ResponseShared429Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchResourceTranslationByResourceTranslationIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, PatchResourceTranslationsResourceTranslationId200Response::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
