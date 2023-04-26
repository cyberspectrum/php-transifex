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

namespace CyberSpectrum\PhpTransifex\Tests\ApiClient;

use CyberSpectrum\PhpTransifex\ApiClient\ClientFactory;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

final class ClientFactoryTest extends TestCase
{
    public function testCreateHttpClientWithoutParameters(): void
    {
        $factory = new ClientFactory($this->getMockForAbstractClass(LoggerInterface::class), []);

        $factory->createHttpClient();
        $this->addToAssertionCount(1);
    }

    public function testCreateWithoutParameters(): void
    {
        $factory = new ClientFactory($this->getMockForAbstractClass(LoggerInterface::class), []);

        $factory->create();
        $this->addToAssertionCount(1);
    }
}
