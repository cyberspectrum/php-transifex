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

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetTeamMemberships200Response;
use CyberSpectrum\PhpTransifex\Client;
use IteratorAggregate;
use Traversable;

use function assert;

/**
 * @implements IteratorAggregate<int, Membership>
 */
final class MembershipList implements IteratorAggregate
{
    /** @var list<Membership> */
    private array $memberships = [];

    public function __construct(
        private readonly Client $client,
        private readonly Team $team,
    ) {
    }

    public function getIterator(): Traversable
    {
        $this->load();
        foreach ($this->memberships as $team) {
            yield $team;
        }
    }

    private function load(): void
    {
        if ([] !== $this->memberships) {
            return;
        }

        // FIXME: pagination.
        $result = $this->client->getTeamMembership([
            'filter[team]' => $this->team->getTeamId(),
            'filter[organization]' => $this->team->getOrganization()->getOrganizationId()
        ]);
        assert($result instanceof GetTeamMemberships200Response);

        $organization = $this->team->getOrganization();
        foreach ($result->getData() as $data) {
            $relationShips = $data->getRelationships();
            $this->memberships[] = new Membership(
                $this->client,
                $organization,
                $data->getAttributes()->getRole(),
                $relationShips->getLanguage()->getData()->getId(),
                $relationShips->getTeam()->getData()->getId(),
                $relationShips->getUser()->getData()->getId(),
            );
        }
    }
}
