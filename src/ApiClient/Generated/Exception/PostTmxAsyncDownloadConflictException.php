<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared409Response;
use Psr\Http\Message\ResponseInterface;

class PostTmxAsyncDownloadConflictException extends ConflictException
{
    /**
     * @var ResponseShared409Response
     */
    private $responseShared409Response;
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(ResponseShared409Response $responseShared409Response, ResponseInterface $response)
    {
        parent::__construct('Conflict');
        $this->responseShared409Response = $responseShared409Response;
        $this->response = $response;
    }

    public function getResponseShared409Response(): ResponseShared409Response
    {
        return $this->responseShared409Response;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
