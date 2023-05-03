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

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectIdRequestBody;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectIdRequestBodyData;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\PatchProjectsProjectIdRequestBodyDataAttributes;
use CyberSpectrum\PhpTransifex\Client;
use DateTimeInterface;

/**
 * This represents a project on transifex.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.LongVariable)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
final class Project
{
    use PendingTrait;

    private const FLAG_ARCHIVED = 'archived';
    private const FLAG_DESCRIPTION  = 'description';
    private const FLAG_HOMEPAGE_URL  = 'homepageUrl';
    private const FLAG_INSTRUCTIONS_URL  = 'instructionsUrl';
    private const FLAG_LICENSE  = 'license';
    private const FLAG_LONG_DESCRIPTION = 'longDescription';
    private const FLAG_MACHINE_TRANSLATION_FILLUP = 'machineTranslationFillup';
    private const FLAG_NAME = 'name';
    private const FLAG_PRIVATE = 'private';
    private const FLAG_REPOSITORY_URL = 'repositoryUrl';
    private const FLAG_TAGS  = 'tags';
    private const FLAG_TRANSLATION_MEMORY_FILLUP  = 'translationMemoryFillup';

    private readonly LanguageList $languages;

    private MaintainerList $maintainerList;

    private ResourceList $resources;

    /** @SuppressWarnings(PHPMD.ExcessiveParameterList) */
    public function __construct(
        private readonly Client $client,
        private readonly Organization $organization,
        private readonly string $projectId,
        private bool $archived,
        private readonly DateTimeInterface $datetimeCreated,
        private readonly DateTimeInterface $datetimeModified,
        private string $description,
        private string $homepageUrl,
        private string $instructionsUrl,
        private string $license,
        private readonly string $logoUrl,
        private string $longDescription,
        private bool $machineTranslationFillup,
        private string $name,
        private bool $private,
        private string $repositoryUrl,
        private readonly string $slug,
        /** @var list<string> */
        private array $tags,
        private bool $translationMemoryFillup,
        private readonly string $type
    ) {
        $this->languages = new LanguageList($this->client, $this);
        $this->maintainerList = new MaintainerList($this->client, $this);
        $this->resources = new ResourceList($this->client, $this);
    }

    public function getProjectId(): string
    {
        return $this->projectId;
    }

    /**
     * If the project is archived or not.
     * If a project is archived the pricing will be lower but no action will be available.
     */
    public function isArchived(): bool
    {
        return $this->archived;
    }

    public function setArchived(bool $archived): self
    {
        $this->archived = $archived;
        $this->markPending(self::FLAG_ARCHIVED);

        return $this;
    }

    public function getDatetimeCreated(): DateTimeInterface
    {
        return $this->datetimeCreated;
    }

    public function getDatetimeModified(): DateTimeInterface
    {
        return $this->datetimeModified;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        $this->markPending(self::FLAG_DESCRIPTION);

        return $this;
    }

    public function getHomepageUrl(): string
    {
        return $this->homepageUrl;
    }

    public function setHomepageUrl(string $homepageUrl): self
    {
        $this->homepageUrl = $homepageUrl;
        $this->markPending(self::FLAG_HOMEPAGE_URL);

        return $this;
    }

    /** A web page containing documentation or instructions for translators, or localization tips for your community. */
    public function getInstructionsUrl(): string
    {
        return $this->instructionsUrl;
    }

    public function setInstructionsUrl(string $instructionsUrl): self
    {
        $this->instructionsUrl = $instructionsUrl;
        $this->markPending(self::FLAG_INSTRUCTIONS_URL);

        return $this;
    }

    /** The license of the Project. */
    public function getLicense(): string
    {
        return $this->license;
    }

    public function setLicense(string $license): self
    {
        $this->license = $license;
        $this->markPending(self::FLAG_LICENSE);

        return $this;
    }

    /** The URL of the project's logo. */
    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }

    /** A long description of the Project. */
    public function getLongDescription(): string
    {
        return $this->longDescription;
    }

    public function setLongDescription(string $longDescription): self
    {
        $this->longDescription = $longDescription;
        $this->markPending(self::FLAG_LONG_DESCRIPTION);

        return $this;
    }

    /** If the Resources of the Project will be filled-up from a Machine Translation. */
    public function isMachineTranslationFillup(): bool
    {
        return $this->machineTranslationFillup;
    }

    public function setMachineTranslationFillup(bool $machineTranslationFillup): self
    {
        $this->machineTranslationFillup = $machineTranslationFillup;
        $this->markPending(self::FLAG_MACHINE_TRANSLATION_FILLUP);

        return $this;
    }

    /** The name of the Project. */
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

    /** If the project is private or not. A private project is visible only by you and your team. */
    public function isPrivate(): bool
    {
        return $this->private;
    }

    public function setPrivate(bool $private): self
    {
        $this->private = $private;
        $this->markPending(self::FLAG_PRIVATE);

        return $this;
    }

    /** The URL of the public source code repository. */
    public function getRepositoryUrl(): string
    {
        return $this->repositoryUrl;
    }

    public function setRepositoryUrl(string $repositoryUrl): self
    {
        $this->repositoryUrl = $repositoryUrl;
        $this->markPending(self::FLAG_REPOSITORY_URL);

        return $this;
    }

    /** The slug of the Project. */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /** @return list<string> */
    public function getTags(): array
    {
        return $this->tags;
    }

    /** @param list<string> $tags */
    public function setTags(string ...$tags): self
    {
        $this->tags = array_values($tags);
        $this->markPending(self::FLAG_TAGS);

        return $this;
    }

    /** If the Resources of the Project will be filled-up from the common Translation Memory. */
    public function isTranslationMemoryFillup(): bool
    {
        return $this->translationMemoryFillup;
    }

    public function setTranslationMemoryFillup(bool $translationMemoryFillup): self
    {
        $this->translationMemoryFillup = $translationMemoryFillup;
        $this->markPending(self::FLAG_TRANSLATION_MEMORY_FILLUP);

        return $this;
    }

    /** The type of the Project. */
    public function getType(): string
    {
        return $this->type;
    }

    public function maintainers(): MaintainerList
    {
        return $this->maintainerList;
    }

    public function organization(): Organization
    {
        return $this->organization;
    }

    public function languages(): LanguageList
    {
        return $this->languages;
    }

    public function resources(): ResourceList
    {
        return $this->resources;
    }

    public function save(): void
    {
        if (!$this->hasPending()) {
            return;
        }

        $this->client->patchProjectByProjectId(
            $this->projectId,
            (new PatchProjectsProjectIdRequestBody())
                ->setData(
                    (new PatchProjectsProjectIdRequestBodyData())
                        ->setType('projects')
                        ->setId($this->projectId)
                        ->setAttributes($this->buildAttributes())
                )
        );

        $this->clearPending();
    }

    /**
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    private function buildAttributes(): PatchProjectsProjectIdRequestBodyDataAttributes
    {
        $attributes = new PatchProjectsProjectIdRequestBodyDataAttributes();
        if ($this->isPending(self::FLAG_ARCHIVED)) {
            $attributes->setArchived($this->isArchived());
        }
        if ($this->isPending(self::FLAG_DESCRIPTION)) {
            $attributes->setDescription($this->getDescription());
        }
        if ($this->isPending(self::FLAG_HOMEPAGE_URL)) {
            $attributes->setHomepageUrl($this->getHomepageUrl());
        }
        if ($this->isPending(self::FLAG_INSTRUCTIONS_URL)) {
            $attributes->setInstructionsUrl($this->getInstructionsUrl());
        }
        if ($this->isPending(self::FLAG_LICENSE)) {
            $attributes->setLicense($this->getLicense());
        }
        if ($this->isPending(self::FLAG_LONG_DESCRIPTION)) {
            $attributes->setLongDescription($this->getLongDescription());
        }
        if ($this->isPending(self::FLAG_MACHINE_TRANSLATION_FILLUP)) {
            $attributes->setMachineTranslationFillup($this->isMachineTranslationFillup());
        }
        if ($this->isPending(self::FLAG_NAME)) {
            $attributes->setName($this->getName());
        }
        if ($this->isPending(self::FLAG_PRIVATE)) {
            $attributes->setPrivate($this->isPrivate());
        }
        if ($this->isPending(self::FLAG_REPOSITORY_URL)) {
            $attributes->setRepositoryUrl($this->getRepositoryUrl());
        }
        if ($this->isPending(self::FLAG_TAGS)) {
            $attributes->setTags($this->getTags());
        }
        if ($this->isPending(self::FLAG_TRANSLATION_MEMORY_FILLUP)) {
            $attributes->setTranslationMemoryFillup($this->isTranslationMemoryFillup());
        }

        return $attributes;
    }
}
