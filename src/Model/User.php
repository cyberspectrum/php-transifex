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

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Exception\GetUserByUserIdNotFoundException;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetUsersUserId200Response;
use CyberSpectrum\PhpTransifex\Client;

final class User
{
    /** @var array<string, string|null> */
    private static array $usernames = [];

    public function __construct(
        private readonly Client $client,
        private readonly string $userId,
    ) {
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getUsername(): ?string
    {
        $this->load();

        return self::$usernames[$this->userId];
    }

    private function load(): void
    {
        if (array_key_exists($this->userId, self::$usernames)) {
            return;
        }

        try {
            $data = $this->client->getUserByUserId($this->userId);
            assert($data instanceof GetUsersUserId200Response);
            self::$usernames[$this->userId] = $data->getData()->getAttributes()->getUsername();
        } catch (GetUserByUserIdNotFoundException $exception) {
            self::$usernames[$this->userId] = null;
        }
    }
}
