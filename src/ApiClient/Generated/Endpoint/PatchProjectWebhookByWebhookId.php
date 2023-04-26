<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchProjectWebhookByWebhookIdBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchProjectWebhookByWebhookIdConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchProjectWebhookByWebhookIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchProjectWebhookByWebhookIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PatchProjectWebhookByWebhookIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectWebhooksWebhookId200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectWebhooksWebhookIdRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared409Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PatchProjectWebhookByWebhookId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $webhook_id;

    /**
     * update a project webhook. You can for example modify its status.
     *
     * @param string $webhookId format of composite id should be `o:organization_slug:p:project_slug:w:4abfc726-6a27-4c33-9d99-e5254c8df748
     */
    public function __construct(string $webhookId, PatchProjectWebhooksWebhookIdRequestBody $requestBody)
    {
        $this->webhook_id = $webhookId;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'PATCH';
    }

    public function getUri(): string
    {
        return str_replace(['{webhook_id}'], [$this->webhook_id], '/project_webhooks/{webhook_id}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof PatchProjectWebhooksWebhookIdRequestBody) {
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
     * @throws PatchProjectWebhookByWebhookIdBadRequestException
     * @throws PatchProjectWebhookByWebhookIdUnauthorizedException
     * @throws PatchProjectWebhookByWebhookIdNotFoundException
     * @throws PatchProjectWebhookByWebhookIdConflictException
     * @throws PatchProjectWebhookByWebhookIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): PatchProjectWebhooksWebhookId200Response
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, PatchProjectWebhooksWebhookId200Response::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchProjectWebhookByWebhookIdBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchProjectWebhookByWebhookIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchProjectWebhookByWebhookIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchProjectWebhookByWebhookIdConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PatchProjectWebhookByWebhookIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, PatchProjectWebhooksWebhookId200Response::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
