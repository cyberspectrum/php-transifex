<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchTeamsTeamId200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * List of team objects.
     *
     * @var PatchTeamsTeamId200ResponseDataItem[]
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * List of team objects.
     *
     * @return PatchTeamsTeamId200ResponseDataItem[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * List of team objects.
     *
     * @param PatchTeamsTeamId200ResponseDataItem[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
