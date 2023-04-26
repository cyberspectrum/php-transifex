<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchProjectsProjectId200ResponseDataItemRelationshipsSourceLanguage
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Language data container.
     *
     * @var PatchProjectsProjectId200ResponseDataItemRelationshipsSourceLanguageData
     */
    protected $data;
    /**
     * Language related link.
     *
     * @var PatchProjectsProjectId200ResponseDataItemRelationshipsSourceLanguageLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Language data container.
     */
    public function getData(): PatchProjectsProjectId200ResponseDataItemRelationshipsSourceLanguageData
    {
        return $this->data;
    }

    /**
     * Language data container.
     */
    public function setData(PatchProjectsProjectId200ResponseDataItemRelationshipsSourceLanguageData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * Language related link.
     */
    public function getLinks(): PatchProjectsProjectId200ResponseDataItemRelationshipsSourceLanguageLinks
    {
        return $this->links;
    }

    /**
     * Language related link.
     */
    public function setLinks(PatchProjectsProjectId200ResponseDataItemRelationshipsSourceLanguageLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
