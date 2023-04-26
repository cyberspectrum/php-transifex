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

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\DataRelationshipsData;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetLanguages200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetProjects200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\OrganizationDataRelationshipsOrganizationData;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostProjectsRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostProjectsRequestBodyData;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostProjectsRequestBodyDataAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostProjectsRequestBodyDataRelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostProjectsRequestBodyDataRelationshipsOrganization;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PostProjectsRequestBodyDataRelationshipsSourceLanguage;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ProjectsResponse;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ProjectsResponseDataAttributes;
use CyberSpectrum\PhpTransifex\Client;
use InvalidArgumentException;
use IteratorAggregate;
use OutOfBoundsException;
use Traversable;

use function array_map;
use function assert;
use function count;
use function in_array;

/**
 * @implements IteratorAggregate<int, Project>
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
final class ProjectList implements IteratorAggregate
{
    /** @var list<Project> */
    private array $projects = [];

    public function __construct(
        private readonly Client $client,
        private readonly Organization $organization
    ) {
    }

    /**
     * Retrieve a project.
     *
     * @param string $slug The slug.
     *
     * @throws OutOfBoundsException When the requested project is not in the list.
     */
    public function getBySlug(string $slug): Project
    {
        $this->load();
        foreach ($this->projects as $project) {
            if ($project->getSlug() === $slug) {
                return $project;
            }
        }

        throw new OutOfBoundsException('Project not in list: ' . $slug);
    }

    /**
     * Check if a project is in the list.
     *
     * @param string $slug The slug.
     */
    public function has(string $slug): bool
    {
        return in_array($slug, $this->slugs());
    }

    /**
     * Add a new project.
     *
     * @param string $slug         The project slug.
     * @param string $name         The name.
     *
     * @throws InvalidArgumentException When the resource is already in the list.
     */
    public function add(
        string $slug,
        string $name,
        string $description,
        string $sourceLanguageCode,
        ?string $repositoryUrl = null
    ): Project {
        if ($this->has($slug)) {
            throw new InvalidArgumentException('Project already in list: ' . $slug);
        }

        $languages = $this->client->getLanguage(['code' => $sourceLanguageCode]);
        assert($languages instanceof GetLanguages200Response);
        $data = $languages->getData();
        if (count($data) !== 1) {
            throw new InvalidArgumentException(
                'Failed to determine language Id from language code ' . $sourceLanguageCode
            );
        }
        $sourceLanguageId = $data[0]->getId();

        $attributes = (new PostProjectsRequestBodyDataAttributes())
            ->setSlug($slug)
            ->setName($name)
            ->setDescription($description);
        if (is_string($repositoryUrl)) {
            $attributes->setRepositoryUrl($repositoryUrl);
        }

        $result = $this->client->postProject(
            (new PostProjectsRequestBody())
                ->setData(
                    (new PostProjectsRequestBodyData())
                        ->setAttributes($attributes)
                        ->setRelationships(
                            (new PostProjectsRequestBodyDataRelationships())
                                ->setOrganization(
                                    (new PostProjectsRequestBodyDataRelationshipsOrganization())
                                        ->setData(
                                            (new OrganizationDataRelationshipsOrganizationData())
                                                ->setType('organizations')
                                                ->setId($this->organization->getOrganizationId())
                                        )
                                )
                                ->setSourceLanguage(
                                    (new PostProjectsRequestBodyDataRelationshipsSourceLanguage())
                                        ->setData(
                                            (new DataRelationshipsData())
                                                ->setType('languages')
                                                ->setId($sourceLanguageId)
                                        )
                                )
                        )
                ),
        );
        assert($result instanceof ProjectsResponse);
        $data = $result->getData();
        $this->projects[] = $result = $this->projectModel(
            $data->getId(),
            $data->getAttributes(),
        );

        return $result;
    }

    /**
     * Remove a project.
     *
     * @param string $slug The slug.
     *
     * @throws InvalidArgumentException When the project is not in the list.
     */
    public function remove(string $slug): void
    {
        $resource = $this->getBySlug($slug);
        $this->client->deleteProjectByProjectId($resource->getProjectId());
        $this->projects = array_values(array_filter(
            $this->projects,
            fn (Project $candidate): bool => $resource->getProjectId() !== $candidate->getProjectId()
        ));
    }

    /**
     * Retrieve the slugs.
     *
     * @return list<string>
     */
    public function slugs(): array
    {
        $this->load();
        return array_map(
            fn (Project $model): string => $model->getSlug(),
            $this->projects
        );
    }

    public function getIterator(): Traversable
    {
        $this->load();
        foreach ($this->projects as $project) {
            yield $project;
        }
    }

    private function load(): void
    {
        if ([] !== $this->projects) {
            return;
        }

        $result = $this->client->getProject([
            'filter[organization]' => $this->organization->getOrganizationId()
        ]);
        assert($result instanceof GetProjects200Response);
        foreach ($result->getData() as $data) {
            $this->projects[] = $this->projectModel(
                $data->getId(),
                $data->getAttributes(),
            );
        }
    }

    private function projectModel(
        string $projectId,
        ProjectsResponseDataAttributes $attributes
    ): Project {
        return new Project(
            $this->client,
            $this->organization,
            $projectId,
            $attributes->getArchived(),
            $attributes->getDatetimeCreated(),
            $attributes->getDatetimeModified(),
            $attributes->getDescription(),
            $attributes->getHomepageUrl(),
            $attributes->getInstructionsUrl(),
            $attributes->getLicense(),
            $attributes->getLogoUrl(),
            $attributes->getLongDescription(),
            $attributes->getMachineTranslationFillup(),
            $attributes->getName(),
            $attributes->getPrivate(),
            $attributes->getRepositoryUrl(),
            $attributes->getSlug(),
            array_values($attributes->getTags()),
            $attributes->getTranslationMemoryFillup(),
            $attributes->getType()
        );
    }
}
