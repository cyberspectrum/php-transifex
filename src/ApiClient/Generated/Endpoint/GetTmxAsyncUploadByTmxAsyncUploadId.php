<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetTmxAsyncUploadByTmxAsyncUploadIdForbiddenException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetTmxAsyncUploadByTmxAsyncUploadIdInternalServerErrorException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetTmxAsyncUploadByTmxAsyncUploadIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetTmxAsyncUploadByTmxAsyncUploadIdUnauthorizedException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetTmxAsyncUploadsTmxAsyncUploadId200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;

class GetTmxAsyncUploadByTmxAsyncUploadId extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;
    protected $tmx_async_upload_id;

    /**
     * With this endpoint, you can inquire about the status of an tmx file upload job.
     *
     * - If the value of the 'status' attribute is 'pending' or 'processing', you
     * should check this endpoint again later.
     * - If the 'status' is 'failed', the upload has failed to be parsed or validated.
     * - In case the upload job has been successful, you will receive a 'succeeded'
     * value for the 'status' attribute.
     *
     * @param string $tmxAsyncUploadId format of the tmx_async_upload_id should be a UUID
     */
    public function __construct(string $tmxAsyncUploadId)
    {
        $this->tmx_async_upload_id = $tmxAsyncUploadId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{tmx_async_upload_id}'], [$this->tmx_async_upload_id], '/tmx_async_uploads/{tmx_async_upload_id}');
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
     * @throws GetTmxAsyncUploadByTmxAsyncUploadIdUnauthorizedException
     * @throws GetTmxAsyncUploadByTmxAsyncUploadIdForbiddenException
     * @throws GetTmxAsyncUploadByTmxAsyncUploadIdNotFoundException
     * @throws GetTmxAsyncUploadByTmxAsyncUploadIdInternalServerErrorException
     * @throws UnexpectedStatusCodeException
     */
    protected function transformResponseBody(ResponseInterface $response, SerializerInterface $serializer, ?string $contentType = null): GetTmxAsyncUploadsTmxAsyncUploadId200Response
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (false === is_null($contentType) && (200 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            return $serializer->deserialize($body, GetTmxAsyncUploadsTmxAsyncUploadId200Response::class, 'json');
        }
        if (false === is_null($contentType) && (401 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetTmxAsyncUploadByTmxAsyncUploadIdUnauthorizedException($serializer->deserialize($body, ResponseShared401Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (403 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetTmxAsyncUploadByTmxAsyncUploadIdForbiddenException($serializer->deserialize($body, ResponseShared403Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (404 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetTmxAsyncUploadByTmxAsyncUploadIdNotFoundException($serializer->deserialize($body, ResponseShared404Response::class, 'json'), $response);
        }
        if (false === is_null($contentType) && (500 === $status && false !== mb_strpos($contentType, 'application/vnd.api+json'))) {
            throw new GetTmxAsyncUploadByTmxAsyncUploadIdInternalServerErrorException($serializer->deserialize($body, ResponseShared500Response::class, 'json'), $response);
        }
        if (false !== mb_strpos($contentType, 'application/vnd.api+json')) {
            return $serializer->deserialize($body, GetTmxAsyncUploadsTmxAsyncUploadId200Response::class, 'json');
        }

        throw new UnexpectedStatusCodeException($status, $body);
    }
}
