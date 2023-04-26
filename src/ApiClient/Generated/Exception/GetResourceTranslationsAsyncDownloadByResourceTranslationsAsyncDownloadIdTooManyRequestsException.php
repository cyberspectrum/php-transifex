<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared429Response;
use Psr\Http\Message\ResponseInterface;

class GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadIdTooManyRequestsException extends TooManyRequestsException
{
    /**
     * @var ResponseShared429Response
     */
    private $responseShared429Response;
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(ResponseShared429Response $responseShared429Response, ResponseInterface $response)
    {
        parent::__construct('Throttled');
        $this->responseShared429Response = $responseShared429Response;
        $this->response = $response;
    }

    public function getResponseShared429Response(): ResponseShared429Response
    {
        return $this->responseShared429Response;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
