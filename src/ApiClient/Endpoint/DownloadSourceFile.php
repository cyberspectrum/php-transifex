<?php

/**
 * This file is part of cyberspectrum/php-transifex.
 *
 * (c) 2017-2023 Christian Schiffler.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    PhpTransifex
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  2023 Christian Schiffler.
 * @license    https://github.com/cyberspectrum/php-transifex/blob/master/LICENSE MIT
 * @filesource
 */

declare(strict_types=1);

namespace CyberSpectrum\PhpTransifex\ApiClient\Endpoint;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\UnexpectedStatusCodeException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\BaseEndpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\EndpointTrait;
use CyberSpectrum\PhpTransifex\ApiClient\Model\DownloadFile;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Symfony\Component\Serializer\SerializerInterface;

final class DownloadSourceFile extends BaseEndpoint implements Endpoint
{
    use EndpointTrait;

    private string $downloadUri;

    /**
     * With this endpoint, you can download the result of a download job.
     *
     * @param string $downloadUri The location header from the successful download resource.
     */
    public function __construct(string $downloadUri)
    {
        $this->downloadUri = $downloadUri;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return $this->downloadUri;
    }

    /**
     * @param ?StreamFactoryInterface $streamFactory
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
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

    /** @SuppressWarnings(PHPMD.UnusedFormalParameter) */
    protected function transformResponseBody(
        ResponseInterface $response,
        SerializerInterface $serializer,
        ?string $contentType = null
    ): DownloadFile {
        $status = $response->getStatusCode();
        if (false === is_null($contentType) && 200 === $status) {
            $filename = 'unknown';
            if (1 === preg_match('#filename="(.*)"$#', $response->getHeaderLine('Content-Disposition'), $matches)) {
                $filename = $matches[1];
            }

            return new DownloadFile($filename, $contentType, $response->getBody());
        }

        throw new UnexpectedStatusCodeException($status, $response->getBody());
    }
}
