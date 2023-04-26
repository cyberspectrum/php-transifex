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
use DateTimeInterface;

final class Team
{
    private MembershipList $membershipList;

    private ManagerList $managerList;

    public function __construct(
        Client $client,
        private readonly Organization $organization,
        private readonly string $teamId,
        private readonly bool $autoJoin,
        private readonly string $cla,
        private readonly bool $claRequired,
        private readonly DateTimeInterface $datetimeCreated,
        private readonly string $name,
        private readonly string $slug,
    ) {
        $this->membershipList = new MembershipList($client, $this);
        $this->managerList    = new ManagerList($client, $this);
    }

    public function getOrganization(): Organization
    {
        return $this->organization;
    }

    public function getTeamId(): string
    {
        return $this->teamId;
    }

    public function isAutoJoin(): bool
    {
        return $this->autoJoin;
    }

    public function getCla(): string
    {
        return $this->cla;
    }

    public function isClaRequired(): bool
    {
        return $this->claRequired;
    }

    public function getDatetimeCreated(): DateTimeInterface
    {
        return $this->datetimeCreated;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }

    public function memberships(): MembershipList
    {
        return $this->membershipList;
    }

    public function managers(): ManagerList
    {
        return $this->managerList;
    }
}
