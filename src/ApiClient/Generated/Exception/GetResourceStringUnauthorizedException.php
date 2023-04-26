<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared401Response;
use Psr\Http\Message\ResponseInterface;

class GetResourceStringUnauthorizedException extends UnauthorizedException
{
    /**
     * @var ResponseShared401Response
     */
    private $responseShared401Response;
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(ResponseShared401Response $responseShared401Response, ResponseInterface $response)
    {
        parent::__construct('Unauthorized');
        $this->responseShared401Response = $responseShared401Response;
        $this->response = $response;
    }

    public function getResponseShared401Response(): ResponseShared401Response
    {
        return $this->responseShared401Response;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
