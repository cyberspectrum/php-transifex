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

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetTeams200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\TeamsResponseDataAttributes;
use CyberSpectrum\PhpTransifex\Client;
use IteratorAggregate;
use OutOfBoundsException;
use Traversable;

use function array_map;
use function in_array;

/**
 * This class wraps the team list of an organization.
 *
 * @implements IteratorAggregate<int, Team>
 */
final class TeamList implements IteratorAggregate
{
    /** @var list<Team> */
    private array $teams = [];

    public function __construct(
        private readonly Client $client,
        private readonly Organization $organization,
    ) {
    }

    /**
     * Retrieve a team.
     *
     * @param string $slug The team slug.
     *
     * @throws OutOfBoundsException When the requested team is not in the list.
     */
    public function get(string $slug): Team
    {
        $this->load();

        foreach ($this->teams as $team) {
            if ($team->getSlug() === $slug) {
                return $team;
            }
        }

        throw new OutOfBoundsException('Team not in list: ' . $slug);
    }

    /**
     * Check if a translation is in the list.
     *
     * @param string $slug The lang code.
     */
    public function has(string $slug): bool
    {
        return in_array($slug, $this->slugs(), true);
    }

    /**
     * Retrieve the language codes.
     *
     * @return list<string>
     */
    public function slugs(): array
    {
        $this->load();
        return array_map(
            fn (Team $model): string => $model->getSlug(),
            $this->teams
        );
    }

    public function getIterator(): Traversable
    {
        $this->load();
        foreach ($this->teams as $team) {
            yield $team;
        }
    }

    private function load(): void
    {
        if ([] !== $this->teams) {
            return;
        }
        $result = $this->client->getTeam([
            'filter[organization]' => $this->organization->getOrganizationId(),
        ]);
        assert($result instanceof GetTeams200Response);

        foreach ($result->getData() as $resourceData) {
            $this->teams[] = $this->teamModel(
                $resourceData->getId(),
                $resourceData->getAttributes(),
            );
        }
    }

    private function teamModel(
        string $teamId,
        TeamsResponseDataAttributes $attributes,
    ): Team {
        return new Team(
            $this->client,
            $this->organization,
            $teamId,
            $attributes->getAutoJoin(),
            $attributes->getCla(),
            $attributes->getClaRequired(),
            $attributes->getDatetimeCreated(),
            $attributes->getName(),
            $attributes->getSlug(),
        );
    }
}
