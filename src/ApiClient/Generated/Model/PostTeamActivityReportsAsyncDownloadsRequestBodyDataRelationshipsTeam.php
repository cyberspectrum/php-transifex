<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostTeamActivityReportsAsyncDownloadsRequestBodyDataRelationshipsTeam
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Team data container.
     *
     * @var DataRelationshipsTeamData
     */
    protected $data;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Team data container.
     */
    public function getData(): DataRelationshipsTeamData
    {
        return $this->data;
    }

    /**
     * Team data container.
     */
    public function setData(DataRelationshipsTeamData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }
}
