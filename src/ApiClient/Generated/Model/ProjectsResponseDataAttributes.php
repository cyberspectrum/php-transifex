<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use DateTimeInterface;

class ProjectsResponseDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * If the project is archived or not. If a project is archived the pricing will be lower but no action will be available.
     *
     * @var bool
     */
    protected $archived;
    /**
     * @var DateTimeInterface
     */
    protected $datetimeCreated;
    /**
     * @var DateTimeInterface
     */
    protected $datetimeModified;
    /**
     * A description of the Project.
     *
     * @var string
     */
    protected $description;
    /**
     * The homepage of the Project.
     *
     * @var string
     */
    protected $homepageUrl;
    /**
     * A web page containing documentation or instructions for translators, or localization tips for your community.
     *
     * @var string
     */
    protected $instructionsUrl;
    /**
     * The license of the Project.
     *
     * @var string
     */
    protected $license;
    /**
     * The URL of the project's logo.
     *
     * @var string
     */
    protected $logoUrl;
    /**
     * A long description of the Project.
     *
     * @var string
     */
    protected $longDescription;
    /**
     * If the Resources of the Project will be filled-up from a Machine Translation.
     *
     * @var bool
     */
    protected $machineTranslationFillup = false;
    /**
     * The name of the Project.
     *
     * @var string
     */
    protected $name;
    /**
     * If the project is private or not. A private project is visible only by you and your team.
     *
     * @var bool
     */
    protected $private;
    /**
     * The URL of the public source code repository.
     *
     * @var string
     */
    protected $repositoryUrl;
    /**
     * The slug of the Project.
     *
     * @var string
     */
    protected $slug;
    /**
     * List of tags for the Project.
     *
     * @var string[]
     */
    protected $tags;
    /**
     * If the Resources of the Project will be filled-up from the common Translation Memory.
     *
     * @var bool
     */
    protected $translationMemoryFillup = false;
    /**
     * The type of the Project.
     *
     * @var string
     */
    protected $type;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * If the project is archived or not. If a project is archived the pricing will be lower but no action will be available.
     */
    public function getArchived(): bool
    {
        return $this->archived;
    }

    /**
     * If the project is archived or not. If a project is archived the pricing will be lower but no action will be available.
     */
    public function setArchived(bool $archived): self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;

        return $this;
    }

    public function getDatetimeCreated(): DateTimeInterface
    {
        return $this->datetimeCreated;
    }

    public function setDatetimeCreated(DateTimeInterface $datetimeCreated): self
    {
        $this->initialized['datetimeCreated'] = true;
        $this->datetimeCreated = $datetimeCreated;

        return $this;
    }

    public function getDatetimeModified(): DateTimeInterface
    {
        return $this->datetimeModified;
    }

    public function setDatetimeModified(DateTimeInterface $datetimeModified): self
    {
        $this->initialized['datetimeModified'] = true;
        $this->datetimeModified = $datetimeModified;

        return $this;
    }

    /**
     * A description of the Project.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * A description of the Project.
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    /**
     * The homepage of the Project.
     */
    public function getHomepageUrl(): string
    {
        return $this->homepageUrl;
    }

    /**
     * The homepage of the Project.
     */
    public function setHomepageUrl(string $homepageUrl): self
    {
        $this->initialized['homepageUrl'] = true;
        $this->homepageUrl = $homepageUrl;

        return $this;
    }

    /**
     * A web page containing documentation or instructions for translators, or localization tips for your community.
     */
    public function getInstructionsUrl(): string
    {
        return $this->instructionsUrl;
    }

    /**
     * A web page containing documentation or instructions for translators, or localization tips for your community.
     */
    public function setInstructionsUrl(string $instructionsUrl): self
    {
        $this->initialized['instructionsUrl'] = true;
        $this->instructionsUrl = $instructionsUrl;

        return $this;
    }

    /**
     * The license of the Project.
     */
    public function getLicense(): string
    {
        return $this->license;
    }

    /**
     * The license of the Project.
     */
    public function setLicense(string $license): self
    {
        $this->initialized['license'] = true;
        $this->license = $license;

        return $this;
    }

    /**
     * The URL of the project's logo.
     */
    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }

    /**
     * The URL of the project's logo.
     */
    public function setLogoUrl(string $logoUrl): self
    {
        $this->initialized['logoUrl'] = true;
        $this->logoUrl = $logoUrl;

        return $this;
    }

    /**
     * A long description of the Project.
     */
    public function getLongDescription(): string
    {
        return $this->longDescription;
    }

    /**
     * A long description of the Project.
     */
    public function setLongDescription(string $longDescription): self
    {
        $this->initialized['longDescription'] = true;
        $this->longDescription = $longDescription;

        return $this;
    }

    /**
     * If the Resources of the Project will be filled-up from a Machine Translation.
     */
    public function getMachineTranslationFillup(): bool
    {
        return $this->machineTranslationFillup;
    }

    /**
     * If the Resources of the Project will be filled-up from a Machine Translation.
     */
    public function setMachineTranslationFillup(bool $machineTranslationFillup): self
    {
        $this->initialized['machineTranslationFillup'] = true;
        $this->machineTranslationFillup = $machineTranslationFillup;

        return $this;
    }

    /**
     * The name of the Project.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the Project.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * If the project is private or not. A private project is visible only by you and your team.
     */
    public function getPrivate(): bool
    {
        return $this->private;
    }

    /**
     * If the project is private or not. A private project is visible only by you and your team.
     */
    public function setPrivate(bool $private): self
    {
        $this->initialized['private'] = true;
        $this->private = $private;

        return $this;
    }

    /**
     * The URL of the public source code repository.
     */
    public function getRepositoryUrl(): string
    {
        return $this->repositoryUrl;
    }

    /**
     * The URL of the public source code repository.
     */
    public function setRepositoryUrl(string $repositoryUrl): self
    {
        $this->initialized['repositoryUrl'] = true;
        $this->repositoryUrl = $repositoryUrl;

        return $this;
    }

    /**
     * The slug of the Project.
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * The slug of the Project.
     */
    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }

    /**
     * List of tags for the Project.
     *
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * List of tags for the Project.
     *
     * @param string[] $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }

    /**
     * If the Resources of the Project will be filled-up from the common Translation Memory.
     */
    public function getTranslationMemoryFillup(): bool
    {
        return $this->translationMemoryFillup;
    }

    /**
     * If the Resources of the Project will be filled-up from the common Translation Memory.
     */
    public function setTranslationMemoryFillup(bool $translationMemoryFillup): self
    {
        $this->initialized['translationMemoryFillup'] = true;
        $this->translationMemoryFillup = $translationMemoryFillup;

        return $this;
    }

    /**
     * The type of the Project.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The type of the Project.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }
}
