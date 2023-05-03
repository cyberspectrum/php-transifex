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

namespace CyberSpectrum\PhpTransifex\Tests\ApiClient\Model;

use CyberSpectrum\PhpTransifex\ApiClient\Model\DownloadFile;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\StreamInterface;

/** @covers \CyberSpectrum\PhpTransifex\ApiClient\Model\DownloadFile */
final class DownloadFileTest extends TestCase
{
    public function testGetters(): void
    {
        $stream = $this->getMockForAbstractClass(StreamInterface::class);
        $download = new DownloadFile('file.name', 'application/octet-stream', $stream);
        self::assertSame('file.name', $download->getFileName());
        self::assertSame('application/octet-stream', $download->getContentType());
        self::assertSame($stream, $download->getStream());
    }
}
