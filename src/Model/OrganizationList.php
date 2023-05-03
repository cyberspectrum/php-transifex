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

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetOrganizations200Response;
use CyberSpectrum\PhpTransifex\Client;
use OutOfBoundsException;
use Traversable;

use function array_map;
use function assert;
use function in_array;

final class OrganizationList
{
    /** @var list<Organization> */
    private array $organizations = [];

    public function __construct(
        private readonly Client $client,
    ) {
    }

    /**
     * Retrieve an organization.
     *
     * @param string $slug The slug.
     *
     * @throws OutOfBoundsException When the requested organization is not in the list.
     */
    public function getBySlug(string $slug): Organization
    {
        $this->load();
        foreach ($this->organizations as $organization) {
            if ($organization->getSlug() === $slug) {
                return $organization;
            }
        }

        throw new OutOfBoundsException('Organization not in list: ' . $slug);
    }

    /**
     * Check if an organization is in the list.
     *
     * @param string $slug The slug.
     */
    public function has(string $slug): bool
    {
        return in_array($slug, $this->slugs());
    }

    /**
     * Retrieve the slugs.
     *
     * @return list<string>
     */
    public function slugs(): array
    {
        $this->load();
        return array_map(
            fn (Organization $model): string => $model->getSlug(),
            $this->organizations
        );
    }

    public function getIterator(): Traversable
    {
        $this->load();
        foreach ($this->organizations as $organization) {
            yield $organization;
        }
    }

    private function load(): void
    {
        if ([] !== $this->organizations) {
            return;
        }

        // FIXME: pagination handling missing here.
        $result = $this->client->getOrganization();
        assert($result instanceof GetOrganizations200Response);
        foreach ($result->getData() as $data) {
            $attributes = $data->getAttributes();
            $this->organizations[] = new Organization(
                $this->client,
                $data->getId(),
                $attributes->getLogoUrl(),
                $attributes->getName(),
                $attributes->getPrivate(),
                $attributes->getSlug(),
            );
        }
    }
}
