<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ProjectsProjectIdRelationshipsLanguagesRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ProjectsProjectIdRelationshipsLanguagesDataItems[]
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * @return ProjectsProjectIdRelationshipsLanguagesDataItems[]
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param ProjectsProjectIdRelationshipsLanguagesDataItems[] $data
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
