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

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourcesResponseAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\JaneObjectNormalizer;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Serializer;

final class JaneObjectNormalizerTest extends TestCase
{
    public function testDenormalize(): void
    {
        $serializer = new Serializer();

        $normalizer = new JaneObjectNormalizer();
        $normalizer->setNormalizer($serializer);
        $normalizer->setDenormalizer($serializer);

        $result = $normalizer->denormalize([], ResourcesResponseAttributes::class);
        self::assertInstanceOf(ResourcesResponseAttributes::class, $result);

        self::assertSame([], $result->getCategories());
    }
}
