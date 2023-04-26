<?php

/**
 * This file is part of cyberspectrum/php-transifex.
 *
 * (c) 2017-2023 Christian Schiffler.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    PhpTransifex
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  2023 Christian Schiffler.
 * @license    https://github.com/cyberspectrum/php-transifex/blob/master/LICENSE MIT
 * @filesource
 */

declare(strict_types=1);

namespace CyberSpectrum\PhpTransifex\Model;

use CyberSpectrum\PhpTransifex\Client;

/**
 * This represents an organization on transifex.
 *
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 */
final class Organization
{
    use PendingTrait;

    private TeamList $teams;

    private ProjectList $projects;

    public function __construct(
        /** The client instance. */
        private readonly Client $client,
        /** The id of the organization. */
        private readonly string $organizationId,
        /** The URL of the organization's logo. */
        private readonly ?string $logoUrl,
        /** The name of the Project. */
        private readonly string $name,
        /** If the project is private or not. A private project is visible only by you and your team. */
        private readonly bool $private,
        /** The slug of the Project. */
        private readonly string $slug,
    ) {
        $this->teams = new TeamList($this->client, $this);
        $this->projects = new ProjectList($this->client, $this);
    }

    public function getOrganizationId(): string
    {
        return $this->organizationId;
    }

    public function getLogoUrl(): ?string
    {
        return $this->logoUrl;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isPrivate(): bool
    {
        return $this->private;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    /** Retrieve teams. */
    public function teams(): TeamList
    {
        return $this->teams;
    }

    public function projects(): ProjectList
    {
        return $this->projects;
    }
}
