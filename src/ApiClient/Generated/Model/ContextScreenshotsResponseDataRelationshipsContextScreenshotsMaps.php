<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class ContextScreenshotsResponseDataRelationshipsContextScreenshotsMaps
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Context screenshot maps related link.
     *
     * @var ContextScreenshotsResponseDataRelationshipsContextScreenshotsMapsLinks
     */
    protected $links;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Context screenshot maps related link.
     */
    public function getLinks(): ContextScreenshotsResponseDataRelationshipsContextScreenshotsMapsLinks
    {
        return $this->links;
    }

    /**
     * Context screenshot maps related link.
     */
    public function setLinks(ContextScreenshotsResponseDataRelationshipsContextScreenshotsMapsLinks $links): self
    {
        $this->initialized['links'] = true;
        $this->links = $links;

        return $this;
    }
}
