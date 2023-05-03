<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared400Response;
use Psr\Http\Message\ResponseInterface;

class PostContextScreenshotMapBadRequestException extends BadRequestException
{
    /**
     * @var ResponseShared400Response
     */
    private $responseShared400Response;
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(ResponseShared400Response $responseShared400Response, ResponseInterface $response)
    {
        parent::__construct('Invalid');
        $this->responseShared400Response = $responseShared400Response;
        $this->response = $response;
    }

    public function getResponseShared400Response(): ResponseShared400Response
    {
        return $this->responseShared400Response;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
