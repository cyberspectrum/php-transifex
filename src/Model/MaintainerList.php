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
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetProjectsProjectIdMaintainers200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\IdRelationshipsRequestBody;
use CyberSpectrum\PhpTransifex\Client;
use IteratorAggregate;
use OutOfBoundsException;
use Traversable;

use function array_map;
use function assert;
use function in_array;

/**
 * This class wraps the maintainer list.
 *
 * @implements IteratorAggregate<int, Maintainer>
 */
final class MaintainerList implements IteratorAggregate
{
    /** @var list<Maintainer> */
    private array $maintainers = [];

    public function __construct(
        private readonly Client $client,
        private readonly Project $project
    ) {
    }

    /**
     * Retrieve a maintainer.
     *
     * @param string $username The username.
     *
     * @throws OutOfBoundsException When the requested maintainer is not in the list.
     */
    public function getByName(string $username): Maintainer
    {
        $this->load();
        foreach ($this->maintainers as $maintainer) {
            if ($maintainer->getUserName() === $username) {
                return $maintainer;
            }
        }

        throw new OutOfBoundsException('Maintainer not in list: ' . $username);
    }

    /**
     * Check if a maintainer is in the list.
     *
     * @param string $username The name.
     */
    public function has(string $username): bool
    {
        return in_array($username, $this->names());
    }

    public function add(string ...$userIds): void
    {
        $this->client->postProjectsByProjectIdRelationshipsMaintainer(
            $this->project->getProjectId(),
            $this->idListToRequestBody(...$userIds)
        );

        // Need to reload data to obtain usernames.
        $this->maintainers = [];
    }

    public function remove(Manager $manager): void
    {
        $manager = $this->getByName($manager->getUserName());

        $this->client->deleteProjectsByProjectIdRelationshipsMaintainer(
            $this->project->getProjectId(),
            $this->idListToRequestBody($manager->getUserId())
        );

        $this->maintainers = array_values(array_filter(
            $this->maintainers,
            fn (Maintainer $candidate): bool => $manager->getUserName() !== $candidate->getUserName()
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
            fn (Maintainer $model): string => $model->getUserName(),
            $this->maintainers
        );
    }

    public function getIterator(): Traversable
    {
        $this->load();
        foreach ($this->maintainers as $maintainer) {
            yield $maintainer;
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
        if ([] !== $this->maintainers) {
            return;
        }

        // FIXME: pagination handling missing here.
        $result = $this->client->getProjectsByProjectIdMaintainer($this->project->getProjectId());
        assert($result instanceof GetProjectsProjectIdMaintainers200Response);
        foreach ($result->getData() as $data) {
            $attributes = $data->getAttributes();
            $this->maintainers[] = new Maintainer(
                $this->project,
                $data->getId(),
                $attributes->getUsername(),
            );
        }
    }
}
