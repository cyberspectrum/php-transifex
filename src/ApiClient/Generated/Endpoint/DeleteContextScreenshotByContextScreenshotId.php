<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteContextScreenshotByContextScreenshotIdConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteContextScreenshotByContextScreenshotIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteContextScreenshotByContextScreenshotIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\DeleteContextScreenshotByContextScreenshotIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared409Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class DeleteContextScreenshotByContextScreenshotId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $context_screenshot_id;

    /**
     * Delete a project context screenshot.
     */
    public function __construct(string $contextScreenshotId)
    {
        $this->context_screenshot_id = $contextScreenshotId;
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }

    public function getUri(): string
    {
        return str_replace(['{context_screenshot_id}'], [$this->context_screenshot_id], '/context_screenshots/{context_screenshot_id}');
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
     * @throws DeleteContextScreenshotByContextScreenshotIdUnauthorizedException
     * @throws DeleteContextScreenshotByContextScreenshotIdNotFoundException
     * @throws DeleteContextScreenshotByContextScreenshotIdConflictException
     * @throws DeleteContextScreenshotByContextScreenshotIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteContextScreenshotByContextScreenshotIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteContextScreenshotByContextScreenshotIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteContextScreenshotByContextScreenshotIdConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new DeleteContextScreenshotByContextScreenshotIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }

        return null;

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
