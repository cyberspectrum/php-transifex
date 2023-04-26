<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceTranslationsAsyncUploadBadRequestException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceTranslationsAsyncUploadConflictException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceTranslationsAsyncUploadForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceTranslationsAsyncUploadInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceTranslationsAsyncUploadNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceTranslationsAsyncUploadTooManyRequestsException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\PostResourceTranslationsAsyncUploadUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceTranslationsAsyncUploadsRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsAsyncUploadsResponse;
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
use Http\Message\MultipartStream\MultipartStreamBuilder;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class PostResourceTranslationsAsyncUpload extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    /**
     * Upload a new resource translation file for a specific language.
     */
    public function __construct(PostResourceTranslationsAsyncUploadsRequestBody $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/resource_translations_async_uploads';
    }

    public function getBody(SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof PostResourceTranslationsAsyncUploadsRequestBody) {
            return [['Content-Type' => ['application/vnd.api+json']], $serializer->serialize($this->body, 'json')];
        }
        if ($this->body instanceof PostResourceTranslationsAsyncUploadsRequestBody) {
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
     * @throws PostResourceTranslationsAsyncUploadBadRequestException
     * @throws PostResourceTranslationsAsyncUploadUnauthorizedException
     * @throws PostResourceTranslationsAsyncUploadForbiddenException
     * @throws PostResourceTranslationsAsyncUploadNotFoundException
     * @throws PostResourceTranslationsAsyncUploadConflictException
     * @throws PostResourceTranslationsAsyncUploadTooManyRequestsException
     * @throws PostResourceTranslationsAsyncUploadInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): ResourceTranslationsAsyncUploadsResponse
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (202 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, ResourceTranslationsAsyncUploadsResponse::class, 'json');
        }
        if (false === is_null($contentType) && (400 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceTranslationsAsyncUploadBadRequestException($serializer->deserialize($body, ResponseShared400Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceTranslationsAsyncUploadUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceTranslationsAsyncUploadForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceTranslationsAsyncUploadNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (409 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceTranslationsAsyncUploadConflictException($serializer->deserialize($body, ResponseShared409Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (429 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceTranslationsAsyncUploadTooManyRequestsException($serializer->deserialize($body, ResponseShared429Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new PostResourceTranslationsAsyncUploadInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, ResourceTranslationsAsyncUploadsResponse::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
