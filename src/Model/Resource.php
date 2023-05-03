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
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Endpoint\GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadId;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\DataRelationshipsData2;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourcesResourceIdRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourcesResourceIdRequestBodyData;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchResourcesResourceIdRequestBodyDataAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringsAsyncDownloadsRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringsAsyncDownloadsRequestBodyData;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringsAsyncDownloadsRequestBodyDataRelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringsAsyncDownloadsRequestBodyDataRelationshipsResource;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringsAsyncUploadsRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringsAsyncUploadsRequestBodyData;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringsAsyncUploadsRequestBodyDataAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringsAsyncUploadsRequestBodyDataRelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourceStringsAsyncUploadsRequestBodyDataRelationshipsResource;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceStringsAsyncDownloadsResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsAsyncDownloadsResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Model\DownloadFile;
use CyberSpectrum\PhpTransifex\Client;
use DateTimeInterface;
use InvalidArgumentException;
use RuntimeException;
// @codingStandardsIgnoreEnd

use function in_array;

/**
 * This class represents a project language.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 */
final class Resource
{
    use PendingTrait;

    public const RESOURCE_PRIORITY_NORMAL = 'normal';
    public const RESOURCE_PRIORITY_HIGH = 'high';
    public const RESOURCE_PRIORITY_URGENT = 'urgent';
    public const RESOURCE_PRIORITY = [
        self::RESOURCE_PRIORITY_NORMAL,
        self::RESOURCE_PRIORITY_HIGH,
        self::RESOURCE_PRIORITY_URGENT,
    ];

    private const FLAG_ACCEPT_TRANSLATIONS = 'accept_translations';
    private const FLAG_CATEGORIES  = 'categories';
    private const FLAG_MP4_URL  = 'mp4_url';
    private const FLAG_NAME  = 'name';
    private const FLAG_OGG_URL  = 'ogg_url';
    private const FLAG_PRIORITY  = 'priority';
    private const FLAG_WEBM_URL  = 'webm_url';
    private const FLAG_YOUTUBE_URL  = 'youtube_url';

    private TranslationList $translationList;

    /** @SuppressWarnings(PHPMD.ExcessiveParameterList) */
    public function __construct(
        private readonly Client $client,
        private readonly Project $projectModel,
        private readonly string $resourceId,
        private readonly string $i18nFormatId,
        private readonly string $slug,
        private string $name,
        private string $priority,
        private readonly float $i18nVersion,
        private bool $acceptTranslations,
        private readonly float $stringCount,
        private readonly float $wordCount,
        private readonly DateTimeInterface $datetimeCreated,
        private readonly DateTimeInterface $datetimeModified,
        /** @var list<string> */
        private array $categories,
        /** @var null|array<string, mixed> */
        private readonly ?array $i18nOptions,
        private ?string $mp4Url,
        private ?string $oggUrl,
        private ?string $youtubeUrl,
        private ?string $webmUrl,
    ) {
        if (!in_array($this->priority, self::RESOURCE_PRIORITY, true)) {
            throw new InvalidArgumentException('Unknown priority passed: ' . $this->priority);
        }
        $this->translationList = new TranslationList(
            $this->client,
            $this->projectModel,
            $this
        );
    }

    public function getProject(): Project
    {
        return $this->projectModel;
    }

    public function getResourceId(): string
    {
        return $this->resourceId;
    }

    public function getI18nFormatId(): string
    {
        return $this->i18nFormatId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        $this->markPending(self::FLAG_NAME);

        return $this;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function getPriority(): string
    {
        return $this->priority;
    }

    public function setPriority(string $priority): self
    {
        $this->priority = $priority;
        $this->markPending(self::FLAG_PRIORITY);

        return $this;
    }

    public function getI18nVersion(): float
    {
        return $this->i18nVersion;
    }

    public function getAcceptTranslations(): bool
    {
        return $this->acceptTranslations;
    }

    public function setAcceptTranslations(bool $acceptTranslations): self
    {
        $this->acceptTranslations = $acceptTranslations;
        $this->markPending(self::FLAG_ACCEPT_TRANSLATIONS);

        return $this;
    }

    public function getStringCount(): float
    {
        return $this->stringCount;
    }

    public function getWordCount(): float
    {
        return $this->wordCount;
    }

    public function getDatetimeCreated(): DateTimeInterface
    {
        return $this->datetimeCreated;
    }

    public function getDatetimeModified(): DateTimeInterface
    {
        return $this->datetimeModified;
    }

    /** @return list<string> */
    public function getCategories(): array
    {
        return $this->categories;
    }

    /** @param list<string> $categories */
    public function setCategories(array $categories): self
    {
        $this->categories = $categories;
        $this->markPending(self::FLAG_CATEGORIES);

        return $this;
    }

    /** @return null|array<string, mixed> */
    public function getI18nOptions(): ?array
    {
        return $this->i18nOptions;
    }

    public function getMp4Url(): ?string
    {
        return $this->mp4Url;
    }

    public function setMp4Url(?string $mp4Url): self
    {
        $this->mp4Url = $mp4Url;
        $this->markPending(self::FLAG_MP4_URL);

        return $this;
    }

    public function getOggUrl(): ?string
    {
        return $this->oggUrl;
    }

    public function setOggUrl(?string $oggUrl): self
    {
        $this->oggUrl = $oggUrl;
        $this->markPending(self::FLAG_OGG_URL);

        return $this;
    }

    public function getYoutubeUrl(): ?string
    {
        return $this->youtubeUrl;
    }

    public function setYoutubeUrl(?string $youtubeUrl): self
    {
        $this->youtubeUrl = $youtubeUrl;
        $this->markPending(self::FLAG_YOUTUBE_URL);

        return $this;
    }

    public function getWebmUrl(): ?string
    {
        return $this->webmUrl;
    }

    public function setWebmUrl(?string $webmUrl): self
    {
        $this->webmUrl = $webmUrl;
        $this->markPending(self::FLAG_WEBM_URL);

        return $this;
    }

    public function content(): string
    {
        $download = $this->client->postResourceStringsAsyncDownload(
            (new PostResourceStringsAsyncDownloadsRequestBody())->setData(
                (new PostResourceStringsAsyncDownloadsRequestBodyData())
                    ->setType('resource_strings_async_downloads')
                ->setRelationships(
                    (new PostResourceStringsAsyncDownloadsRequestBodyDataRelationships())
                        ->setResource(
                            (new PostResourceStringsAsyncDownloadsRequestBodyDataRelationshipsResource())
                                ->setData(
                                    (new DataRelationshipsData2())
                                        ->setType('resources')
                                        ->setId($this->resourceId)
                                )
                        )
                )
            )
        );
        assert($download instanceof ResourceStringsAsyncDownloadsResponse);
        $downloadId = $download->getData()->getId();
        unset($download);

        do {
            $endpoint = new GetResourceStringsAsyncDownloadByResourceStringsAsyncDownloadId($downloadId);
            $response = $this->client->executeRawEndpoint($endpoint);
            if ($response->getStatusCode() === 303) {
                $contents = $this->client->executeEndpoint(
                    new DownloadSourceFile($response->getHeaderLine('Location'))
                );
                assert($contents instanceof DownloadFile);

                return (string) $contents->getStream();
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
            sleep(3);
        } while (true);
    }

    /**
     * Update the content of the resource.
     *
     * @param string $content The file contents.
     */
    public function setContent(string $content): self
    {
        // TODO: uploading content here, however we do not know if the media type is the same, do we need to bother?
        $this->client->postResourceStringsAsyncUpload(
            (new PostResourceStringsAsyncUploadsRequestBody())
                ->setData(
                    (new PostResourceStringsAsyncUploadsRequestBodyData())
                        ->setType('resource_strings_async_uploads')
                        ->setAttributes(
                            (new PostResourceStringsAsyncUploadsRequestBodyDataAttributes())
                                ->setContent(base64_encode($content))
                                ->setContentEncoding('base64')
                                ->setReplaceEditedStrings(false)
                        )
                        ->setRelationships(
                            (new PostResourceStringsAsyncUploadsRequestBodyDataRelationships())
                            ->setResource(
                                (new PostResourceStringsAsyncUploadsRequestBodyDataRelationshipsResource())
                                    ->setData(
                                        (new DataRelationshipsData2())
                                            ->setId($this->resourceId)
                                            ->setType('resources')
                                    )
                            )
                        )
                )
        );
        // TODO: do we need to check the result here and update our values / replace the resource values?

        return $this;
    }

    public function translations(): TranslationList
    {
        return $this->translationList;
    }

    public function save(): void
    {
        $this->client->patchResourceByResourceId(
            $this->resourceId,
            (new PatchResourcesResourceIdRequestBody())
                ->setData(
                    (new PatchResourcesResourceIdRequestBodyData())
                        ->setType('resources')
                        ->setId($this->resourceId)
                        ->setAttributes($this->buildAttributes())
                )
        );

        $this->clearPending();
    }

    private function buildAttributes(): PatchResourcesResourceIdRequestBodyDataAttributes
    {
        $attributes = new PatchResourcesResourceIdRequestBodyDataAttributes();
        if ($this->isPending(self::FLAG_ACCEPT_TRANSLATIONS)) {
            $attributes->setAcceptTranslations($this->getAcceptTranslations());
        }
        if ($this->isPending(self::FLAG_CATEGORIES)) {
            $attributes->setCategories($this->getCategories());
        }
        if ($this->isPending(self::FLAG_MP4_URL)) {
            $attributes->setMp4Url($this->getMp4Url());
        }
        if ($this->isPending(self::FLAG_NAME)) {
            $attributes->setName($this->getName());
        }
        if ($this->isPending(self::FLAG_OGG_URL)) {
            $attributes->setOggUrl($this->getOggUrl());
        }
        if ($this->isPending(self::FLAG_PRIORITY)) {
            $attributes->setPriority($this->getPriority());
        }
        if ($this->isPending(self::FLAG_WEBM_URL)) {
            $attributes->setWebmUrl($this->getWebmUrl());
        }
        if ($this->isPending(self::FLAG_YOUTUBE_URL)) {
            $attributes->setYoutubeUrl($this->getYoutubeUrl());
        }

        return $attributes;
    }
}
