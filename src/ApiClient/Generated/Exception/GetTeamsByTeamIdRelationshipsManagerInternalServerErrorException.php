<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared500Response;
use Psr\Http\Message\ResponseInterface;

class GetTeamsByTeamIdRelationshipsManagerInternalServerErrorException extends InternalServerErrorException
{
    /**
     * @var ResponseShared500Response
     */
    private $responseShared500Response;
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(ResponseShared500Response $responseShared500Response, ResponseInterface $response)
    {
        parent::__construct('Internal Error');
        $this->responseShared500Response = $responseShared500Response;
        $this->response = $response;
    }

    public function getResponseShared500Response(): ResponseShared500Response
    {
        return $this->responseShared500Response;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
