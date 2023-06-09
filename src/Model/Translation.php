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

namespace CyberSpectrum\PhpTransifex\Model;

// @codingStandardsIgnoreStart
use CyberSpectrum\PhpTransifex\ApiClient\Endpoint\DownloadSourceFile;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint\GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadId;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\DataRelationshipsData;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\DataRelationshipsData2;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceTranslationsAsyncDownloadsRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceTranslationsAsyncDownloadsRequestBodyData;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationshipsLanguage;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationshipsResource;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsAsyncDownloadsResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Model\DownloadFile;
use CyberSpectrum\PhpTransifex\Client;
use DateTimeInterface;
use RuntimeException;
// @codingStandardsIgnoreEnd

use function in_array;

/**
 * This class represents a resource translation.
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Translation
{
    private readonly Statistic $statistic;

    private ?string $contents = null;

    private readonly TranslationStringList $strings;

    /**
     * Create a new instance.
     */
    public function __construct(
        private readonly Client $client,
        private readonly Resource $resource,
        private readonly Language $language,
    ) {
        $this->statistic = new Statistic($this->client, $this);
        $this->strings   = new TranslationStringList($this->client, $this);
    }

    public function getResource(): Resource
    {
        return $this->resource;
    }

    public function getLanguage(): Language
    {
        return $this->language;
    }

    /**
     * Fetch the contents.
     */
    public function getContents(): string
    {
        if (null !== $this->contents) {
            return $this->contents;
        }

        $download = $this->client->postResourceTranslationsAsyncDownload(
            (new PostResourceTranslationsAsyncDownloadsRequestBody())
                ->setData(
                    (new PostResourceTranslationsAsyncDownloadsRequestBodyData())
                        ->setType('resource_translations_async_downloads')
                        ->setRelationships(
                            (new PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationships())
                                ->setResource(
                                    (new PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationshipsResource())
                                        ->setData(
                                            (new DataRelationshipsData2())
                                                ->setType('resources')
                                                ->setId($this->resource->getResourceId())
                                        )
                                )
                                ->setLanguage(
                                    (new PostResourceTranslationsAsyncDownloadsRequestBodyDataRelationshipsLanguage())
                                        ->setData(
                                            (new DataRelationshipsData())
                                                ->setType('languages')
                                                ->setId($this->getLanguage()->getLanguageId())
                                        )
                                )
                        )
                )
        );
        assert($download instanceof ResourceTranslationsAsyncDownloadsResponse);
        $downloadId = $download->getData()->getId();
        unset($download);

        do {
            $endpoint = new GetResourceTranslationsAsyncDownloadByResourceTranslationsAsyncDownloadId($downloadId);
            $response = $this->client->executeRawEndpoint($endpoint);
            if ($response->getStatusCode() === 303) {
                $contents = $this->client->executeEndpoint(
                    new DownloadSourceFile($response->getHeaderLine('Location'))
                );
                assert($contents instanceof DownloadFile);

                return $this->contents = (string) $contents->getStream();
            }

            $data = $this->client->parseEndpoint($endpoint, $response);
            assert($data instanceof ResourceTranslationsAsyncDownloadsResponse);
            $attributes = $data->getData()->getAttributes();
            if (!in_array($attributes->getStatus(), ['pending', 'processing'])) {
                $errors = [];
                foreach ($attributes->getErrors() as $error) {
                    $errors[] = sprintf('%s: %s', $error->getCode(), $error->getDetail());
                }

                throw new RuntimeException('Error while downloading resource translation: ' . implode("\n", $errors));
            }

            // FIXME: sleeping is not that cool here :(
            usleep(250000);
        } while (true);
    }

    public function statistic(): Statistic
    {
        return $this->statistic;
    }

    public function strings(): TranslationStringList
    {
        return $this->strings;
    }
}
