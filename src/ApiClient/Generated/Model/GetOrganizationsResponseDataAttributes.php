<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetOrganizationsResponseDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The organization logo url.
     *
     * @var string|null
     */
    protected $logoUrl;
    /**
     * The organization name.
     *
     * @var string
     */
    protected $name;
    /**
     * Private organization. A private organization is visible only by you and your team.
     *
     * @var bool
     */
    protected $private;
    /**
     * The organization slug.
     *
     * @var string
     */
    protected $slug;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The organization logo url.
     */
    public function getLogoUrl(): ?string
    {
        return $this->logoUrl;
    }

    /**
     * The organization logo url.
     */
    public function setLogoUrl(?string $logoUrl): self
    {
        $this->initialized['logoUrl'] = true;
        $this->logoUrl = $logoUrl;

        return $this;
    }

    /**
     * The organization name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The organization name.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * Private organization. A private organization is visible only by you and your team.
     */
    public function getPrivate(): bool
    {
        return $this->private;
    }

    /**
     * Private organization. A private organization is visible only by you and your team.
     */
    public function setPrivate(bool $private): self
    {
        $this->initialized['private'] = true;
        $this->private = $private;

        return $this;
    }

    /**
     * The organization slug.
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * The organization slug.
     */
    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }
}
