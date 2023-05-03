<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchProjectsProjectIdRelationshipsLanguagesRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var PatchProjectsProjectIdRelationshipsLanguagesRequestBodyDataItems[]
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @return PatchProjectsProjectIdRelationshipsLanguagesRequestBodyDataItems[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param PatchProjectsProjectIdRelationshipsLanguagesRequestBodyDataItems[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
