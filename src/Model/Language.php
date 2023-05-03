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

/**
 * This class represents a project language.
 */
class Language
{
    public function __construct(
        private readonly string $languageId,
        private readonly string $languageCode,
        private readonly string $name,
        private readonly string $pluralEquation,
        private readonly bool $rtl
    ) {
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPluralEquation(): string
    {
        return $this->pluralEquation;
    }

    public function isRtl(): bool
    {
        return $this->rtl;
    }
}
