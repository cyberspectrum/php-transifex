<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchTeamsTeamIdRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Update team body request details.
     *
     * @var PatchTeamsTeamIdRequestBodyData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Update team body request details.
     */
    public function getData(): PatchTeamsTeamIdRequestBodyData
    {
        return $this->data;
    }

    /**
     * Update team body request details.
     */
    public function setData(PatchTeamsTeamIdRequestBodyData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
