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

/**
 * This class represents a resource translation string.
 *
 * @SuppressWarnings(PHPMD.ExcessiveParameterList)
 */
final class TranslationString
{
    public function __construct(
        private readonly Client $client,
        private readonly Translation $translation,
        private readonly string $resourceStringId,
        private readonly DateTimeInterface $createdAt,
        private readonly ?DateTimeInterface $proofreadAt,
        private readonly ?DateTimeInterface $reviewedAt,
        private readonly ?DateTimeInterface $translatedAt,
        private readonly bool $finalized,
        private readonly bool $proofread,
        private readonly bool $reviewed,
        private readonly ?User $translator,
        private readonly ?User $reviewer,
        private readonly ?User $proofReader,
        /** @var array<string, string>|null $strings */
        private readonly ?array $strings,
    ) {
    }

    public function getTranslation(): Translation
    {
        return $this->translation;
    }

    public function getResourceStringId(): string
    {
        return $this->resourceStringId;
    }

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    public function getProofreadAt(): ?DateTimeInterface
    {
        return $this->proofreadAt;
    }

    public function getReviewedAt(): ?DateTimeInterface
    {
        return $this->reviewedAt;
    }

    public function getTranslatedAt(): ?DateTimeInterface
    {
        return $this->translatedAt;
    }

    public function isFinalized(): bool
    {
        return $this->finalized;
    }

    public function isProofread(): bool
    {
        return $this->proofread;
    }

    public function isReviewed(): bool
    {
        return $this->reviewed;
    }

    public function getTranslator(): ?User
    {
        return $this->translator;
    }

    public function getReviewer(): ?User
    {
        return $this->reviewer;
    }

    public function getProofReader(): ?User
    {
        return $this->proofReader;
    }

    /** @return array<string, string>|null */
    public function getStrings(): ?array
    {
        return $this->strings;
    }
}
