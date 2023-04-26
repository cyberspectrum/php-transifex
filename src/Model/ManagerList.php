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

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\DataRelationshipsData1;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetTeamsTeamIdManagers200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\IdRelationshipsRequestBody;
use CyberSpectrum\PhpTransifex\Client;
use IteratorAggregate;
use OutOfBoundsException;
use Traversable;

use function array_map;
use function assert;
use function in_array;

/**
 * @implements IteratorAggregate<int, Manager>
 */
final class ManagerList implements IteratorAggregate
{
    /** @var list<Manager> */
    private array $managers = [];

    public function __construct(
        private readonly Client $client,
        private readonly Team $team,
    ) {
    }

    /**
     * Retrieve a manager.
     *
     * @param string $username The username.
     *
     * @throws OutOfBoundsException When the requested manager is not in the list.
     */
    public function getByName(string $username): Manager
    {
        $this->load();
        foreach ($this->managers as $manager) {
            if ($manager->getUserName() === $username) {
                return $manager;
            }
        }

        throw new OutOfBoundsException('Manager not in list: ' . $username);
    }

    /**
     * Check if a manager is in the list.
     *
     * @param string $username The name.
     */
    public function has(string $username): bool
    {
        return in_array($username, $this->names());
    }

    public function add(string ...$userIds): void
    {
        $this->client->postTeamsByTeamIdRelationshipsManager(
            $this->team->getTeamId(),
            $this->idListToRequestBody(...$userIds)
        );

        // Need to reload data to obtain usernames.
        $this->managers = [];
    }

    public function remove(Manager $manager): void
    {
        $manager = $this->getByName($manager->getUserName());

        $this->client->deleteTeamsByTeamIdRelationshipsManager(
            $this->team->getTeamId(),
            $this->idListToRequestBody($manager->getUserId())
        );

        $this->managers = array_values(array_filter(
            $this->managers,
            fn (Manager $candidate): bool => $manager->getUserName() !== $candidate->getUserName()
        ));
    }

    /**
     * Retrieve the names.
     *
     * @return list<string>
     */
    public function names(): array
    {
        $this->load();
        return array_map(
            fn (Manager $model): string => $model->getUserName(),
            $this->managers
        );
    }

    public function getIterator(): Traversable
    {
        $this->load();
        foreach ($this->managers as $team) {
            yield $team;
        }
    }

    private function idListToRequestBody(string ...$userId): IdRelationshipsRequestBody
    {
        return (new IdRelationshipsRequestBody())->setData(
            array_map(
                fn (string $userId): DataRelationshipsData1 => (new DataRelationshipsData1())
                    ->setId($userId)
                    ->setType('users'),
                $userId
            )
        );
    }

    private function load(): void
    {
        if ([] !== $this->managers) {
            return;
        }

        // FIXME: pagination handling missing here.
        $result = $this->client->getTeamsByTeamIdManager($this->team->getTeamId());
        assert($result instanceof GetTeamsTeamIdManagers200Response);

        foreach ($result->getData() as $data) {
            $this->managers[] = new Manager(
                $this->team,
                $data->getId(),
                $data->getAttributes()->getUsername(),
            );
        }
    }
}
