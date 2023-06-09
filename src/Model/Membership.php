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
use InvalidArgumentException;

use function in_array;

final class Membership
{
    public const ROLE_COORDINATOR = 'coordinator';
    public const ROLE_TRANSLATOR = 'translator';
    public const ROLE_REVIEWER = 'reviewer';
    public const VALID_ROLES = [
        self::ROLE_COORDINATOR,
        self::ROLE_TRANSLATOR,
        self::ROLE_REVIEWER,
    ];

    public function __construct(
        private readonly Client $client,
        private readonly Organization $organization,
        private readonly string $role,
        private readonly string $languageId,
        private readonly Team $team,
        private readonly User $user,
    ) {
        if (!in_array($this->role, self::VALID_ROLES, true)) {
            throw new InvalidArgumentException('Invalid role passed: ' . $this->role);
        }
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function getTeam(): Team
    {
        return $this->team;
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
