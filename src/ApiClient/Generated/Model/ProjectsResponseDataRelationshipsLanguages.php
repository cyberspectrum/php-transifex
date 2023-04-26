<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ProjectsResponseDataRelationshipsLanguages
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Project languages links.
     *
     * @var ProjectsResponseDataRelationshipsLanguagesLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Project languages links.
     */
    public function getLinks(): ProjectsResponseDataRelationshipsLanguagesLinks
    {
        return $this->links;
    }

    /**
     * Project languages links.
     */
    public function setLinks(ProjectsResponseDataRelationshipsLanguagesLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
