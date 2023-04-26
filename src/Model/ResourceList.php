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

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResources200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourcesRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourcesRequestBodyData;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourcesRequestBodyDataAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourcesRequestBodyDataRelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostResourcesRequestBodyDataRelationshipsI18nFormat;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourcesDataRelationshipsI18nFormatData;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourcesResponse1;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourcesResponseAttributes;
use CyberSpectrum\PhpTransifex\Client;
use InvalidArgumentException;
use IteratorAggregate;
use OutOfBoundsException;
use Traversable;

use function array_map;
use function assert;
use function in_array;

/**
 * @implements IteratorAggregate<int, Resource>
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
final class ResourceList implements IteratorAggregate
{
    /** @var list<Resource> */
    private array $resources = [];

    public function __construct(
        private readonly Client $client,
        private readonly Project $project
    ) {
    }

    /**
     * Retrieve a resource.
     *
     * @param string $name The name.
     *
     * @throws OutOfBoundsException When the requested resource is not in the list.
     */
    public function getByName(string $name): Resource
    {
        $this->load();
        foreach ($this->resources as $resource) {
            if ($resource->getName() === $name) {
                return $resource;
            }
        }

        throw new OutOfBoundsException('Resource not in list: ' . $name);
    }

    /**
     * Check if a resource is in the list.
     *
     * @param string $name The name.
     */
    public function has(string $name): bool
    {
        return in_array($name, $this->names());
    }

    /**
     * Add a new resource.
     *
     * @param string $slug         The resource slug.
     * @param string $name         The name.
     * @param string $i18nFormatId The internationalization type.
     *
     * @throws InvalidArgumentException When the resource is already in the list.
     */
    public function add(string $slug, string $name, string $i18nFormatId): Resource
    {
        if ($this->has($name)) {
            throw new InvalidArgumentException('Resource already in list: ' . $name);
        }

        $resource = $this->client->postResource((new PostResourcesRequestBody())->setData(
            (new PostResourcesRequestBodyData())
                ->setType('resources')
                ->setAttributes(
                    (new PostResourcesRequestBodyDataAttributes())
                        ->setSlug($slug)
                        ->setName($name)
                )
            ->setRelationships(
                (new PostResourcesRequestBodyDataRelationships())
                    ->setI18nFormat(
                        (new PostResourcesRequestBodyDataRelationshipsI18nFormat())
                            ->setData(
                                (new ResourcesDataRelationshipsI18nFormatData())
                                    ->setId($i18nFormatId)
                                    ->setType('i18n_formats')
                            )
                    )
            )
        ));
        assert($resource instanceof ResourcesResponse1);

        $data = $resource->getData();

        $this->resources[] = $result = $this->resourceModel(
            $data->getId(),
            $data->getAttributes(),
            $data->getRelationships()->getI18nFormat()->getData()->getId()
        );

        return $result;
    }

    /**
     * Remove a resource.
     *
     * @param string $name The name.
     *
     * @throws InvalidArgumentException When the resource is not in the list.
     */
    public function remove(string $name): void
    {
        $resource = $this->getByName($name);

        $this->client->deleteResourceByResourceId($resource->getResourceId());

        $this->resources = array_values(array_filter(
            $this->resources,
            fn (Resource $candidate): bool => $resource->getResourceId() !== $candidate->getResourceId()
        ));
    }

    /**
     * Retrieve the names.
     *
     * @return list<string>
     */
    public function names(): array
    {
        $this->load();
        return array_map(
            fn (Resource $model): string => $model->getName(),
            $this->resources
        );
    }

    public function getIterator(): Traversable
    {
        $this->load();
        foreach ($this->resources as $resource) {
            yield $resource;
        }
    }

    private function load(): void
    {
        if ([] !== $this->resources) {
            return;
        }

        $result = $this->client->getResource([
            'filter[project]' => $this->project->getProjectId()
        ]);
        assert($result instanceof GetResources200Response);
        foreach ($result->getData() as $resourceData) {
            $this->resources[] = $this->resourceModel(
                $resourceData->getId(),
                $resourceData->getAttributes(),
                $resourceData->getRelationships()->getI18nFormat()->getData()->getId()
            );
        }
    }

    /** @psalm-suppress MixedAssignment */
    private function resourceModel(
        string $resourceId,
        ResourcesResponseAttributes $attributes,
        string $i18nFormatId
    ): Resource {
        $i18nOptions = null;
        if ($options = $attributes->getI18nOptions()) {
            /** @var array<string, mixed> $i18nOptions */
            $i18nOptions = [
                // FIXME: we initialize to false here, is this the correct default value?
                'allow_duplicate_strings' =>
                    $options->isInitialized('allowDuplicateStrings') && $options->getAllowDuplicateStrings()
            ];
            /** @var \ArrayObject<string, mixed> $options */
            foreach ($options as $key => $value) {
                $i18nOptions[$key] = $value;
            }
        }

        return new Resource(
            $this->client,
            $this->project,
            $resourceId,
            $i18nFormatId,
            $attributes->getSlug(),
            $attributes->getName(),
            $attributes->getPriority(),
            $attributes->getI18nVersion(),
            $attributes->getAcceptTranslations(),
            $attributes->getStringCount(),
            $attributes->getWordCount(),
            $attributes->getDatetimeCreated(),
            $attributes->getDatetimeModified(),
            array_values($attributes->getCategories()),
            $i18nOptions,
            $attributes->getMp4Url(),
            $attributes->getOggUrl(),
            $attributes->getYoutubeUrl(),
            $attributes->getWebmUrl(),
        );
    }
}
