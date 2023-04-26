<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use DateTimeInterface;

class TeamsResponseDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Whether members will be allowed in the team automatically.
     *
     * @var bool
     */
    protected $autoJoin;
    /**
     * The CLA members will need to agree to before joining.
     *
     * @var string
     */
    protected $cla;
    /**
     * Whether members will need to agree to a CLA before joining.
     *
     * @var bool
     */
    protected $claRequired;
    /**
     * @var DateTimeInterface
     */
    protected $datetimeCreated;
    /**
     * The name of the team.
     *
     * @var string
     */
    protected $name;
    /**
     * The slug of the Team.
     *
     * @var string
     */
    protected $slug;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Whether members will be allowed in the team automatically.
     */
    public function getAutoJoin(): bool
    {
        return $this->autoJoin;
    }

    /**
     * Whether members will be allowed in the team automatically.
     */
    public function setAutoJoin(bool $autoJoin): self
    {
        $this->initialized['autoJoin'] = true;
        $this->autoJoin = $autoJoin;

        return $this;
    }

    /**
     * The CLA members will need to agree to before joining.
     */
    public function getCla(): string
    {
        return $this->cla;
    }

    /**
     * The CLA members will need to agree to before joining.
     */
    public function setCla(string $cla): self
    {
        $this->initialized['cla'] = true;
        $this->cla = $cla;

        return $this;
    }

    /**
     * Whether members will need to agree to a CLA before joining.
     */
    public function getClaRequired(): bool
    {
        return $this->claRequired;
    }

    /**
     * Whether members will need to agree to a CLA before joining.
     */
    public function setClaRequired(bool $claRequired): self
    {
        $this->initialized['claRequired'] = true;
        $this->claRequired = $claRequired;

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

    /**
     * The name of the team.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the team.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The slug of the Team.
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * The slug of the Team.
     */
    public function setSlug(string $slug): self
    {
        $this->initialized['slug'] = true;
        $this->slug = $slug;

        return $this;
    }
}
