<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStrings409Response;
use Psr\Http\Message\ResponseInterface;

class PostResourceStringConflictException extends ConflictException
{
    /**
     * @var PostResourceStrings409Response
     */
    private $postResourceStrings409Response;
    /**
     * @var ResponseInterface
     */
    private $response;

    public function __construct(PostResourceStrings409Response $postResourceStrings409Response, ResponseInterface $response)
    {
        parent::__construct('Conflict');
        $this->postResourceStrings409Response = $postResourceStrings409Response;
        $this->response = $response;
    }

    public function getPostResourceStrings409Response(): PostResourceStrings409Response
    {
        return $this->postResourceStrings409Response;
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }
}
