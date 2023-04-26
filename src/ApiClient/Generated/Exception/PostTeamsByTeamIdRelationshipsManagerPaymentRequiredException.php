<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared402Response;
use Psr\Http\Message\ResponseInterface;

class PostTeamsByTeamIdRelationshipsManagerPaymentRequiredException extends PaymentRequiredException
{
    /**
     * @var ResponseShared402Response
     */
    private $responseShared402Response;
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(ResponseShared402Response $responseShared402Response, ResponseInterface $response)
    {
        parent::__construct('Payment required');
        $this->responseShared402Response = $responseShared402Response;
        $this->response = $response;
    }

    public function getResponseShared402Response(): ResponseShared402Response
    {
        return $this->responseShared402Response;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
