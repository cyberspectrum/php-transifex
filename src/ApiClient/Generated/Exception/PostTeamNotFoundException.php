<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResponseShared404Response;
use Psr\Http\Message\ResponseInterface;

class PostTeamNotFoundException extends NotFoundException
{
    /**
     * @var ResponseShared404Response
     */
    private $responseShared404Response;
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(ResponseShared404Response $responseShared404Response, ResponseInterface $response)
    {
        parent::__construct('Not found');
        $this->responseShared404Response = $responseShared404Response;
        $this->response = $response;
    }

    public function getResponseShared404Response(): ResponseShared404Response
    {
        return $this->responseShared404Response;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
