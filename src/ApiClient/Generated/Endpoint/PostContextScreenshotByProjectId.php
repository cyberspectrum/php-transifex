<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostContextScreenshotByProjectIdBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostContextScreenshotByProjectIdConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostContextScreenshotByProjectIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostContextScreenshotByProjectIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostContextScreenshotByProjectIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ContextScreenshotsContextIdResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostContextScreenshotsProjectIdRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared409Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Http\Message\MultipartStream\MultipartStreamBuilder;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostContextScreenshotByProjectId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $project_id;

    /**
     * Upload screenshot.
     *
     * @param string $projectId format of composite id should be `o:organization_slug:p:project_slug`
     */
    public function __construct(string $projectId, PostContextScreenshotsProjectIdRequestBody $requestBody)
    {
        $this->project_id = $projectId;
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return str_replace(['{project_id}'], [$this->project_id], '/context_screenshots/{project_id}');
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof PostContextScreenshotsProjectIdRequestBody) {
            $bodyBuilder = new MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                $bodyBuilder->addResource($key, $value);
            }

            return [['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')]], $bodyBuilder->build()];
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
     * @throws PostContextScreenshotByProjectIdBadRequestException
     * @throws PostContextScreenshotByProjectIdUnauthorizedException
     * @throws PostContextScreenshotByProjectIdNotFoundException
     * @throws PostContextScreenshotByProjectIdConflictException
     * @throws PostContextScreenshotByProjectIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): ContextScreenshotsContextIdResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (201 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, ContextScreenshotsContextIdResponse::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostContextScreenshotByProjectIdBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostContextScreenshotByProjectIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostContextScreenshotByProjectIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostContextScreenshotByProjectIdConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostContextScreenshotByProjectIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, ContextScreenshotsContextIdResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
