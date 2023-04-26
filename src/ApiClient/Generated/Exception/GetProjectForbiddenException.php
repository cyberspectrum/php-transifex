<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared403Response;
use Psr\Http\Message\ResponseInterface;

class GetProjectForbiddenException extends ForbiddenException
{
    /**
     * @var ResponseShared403Response
     */
    private $responseShared403Response;
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(ResponseShared403Response $responseShared403Response, ResponseInterface $response)
    {
        parent::__construct('Forbidden');
        $this->responseShared403Response = $responseShared403Response;
        $this->response = $response;
    }

    public function getResponseShared403Response(): ResponseShared403Response
    {
        return $this->responseShared403Response;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
