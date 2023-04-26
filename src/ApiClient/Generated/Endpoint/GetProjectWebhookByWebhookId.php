<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetProjectWebhookByWebhookIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetProjectWebhookByWebhookIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetProjectWebhookByWebhookIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ProjectWebhooksResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetProjectWebhookByWebhookId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $webhook_id;

    /**
     * Get the details of the project webhook specified by the required path parameter `webhook_id`.
     *
     * @param string $webhookId format of composite id should be `o:organization_slug:p:project_slug:w:4abfc726-6a27-4c33-9d99-e5254c8df748
     */
    public function __construct(string $webhookId)
    {
        $this->webhook_id = $webhookId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{webhook_id}'], [$this->webhook_id], '/project_webhooks/{webhook_id}');
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
     * @throws GetProjectWebhookByWebhookIdUnauthorizedException
     * @throws GetProjectWebhookByWebhookIdNotFoundException
     * @throws GetProjectWebhookByWebhookIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): ProjectWebhooksResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, ProjectWebhooksResponse::class, 'json');
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetProjectWebhookByWebhookIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetProjectWebhookByWebhookIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetProjectWebhookByWebhookIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, ProjectWebhooksResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
