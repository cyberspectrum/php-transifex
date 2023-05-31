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
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceTranslations200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsResponseDataAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsResponseDataRelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsResponseDataRelationships1;
use CyberSpectrum\PhpTransifex\Client;
use IteratorAggregate;
use OutOfBoundsException;
use Traversable;

use function array_map;
use function assert;
use function in_array;

/**
 * This class wraps the translation list.
 *
 * @implements IteratorAggregate<int, Translation>
 */
final class TranslationList implements IteratorAggregate
{
    /** @var list<Translation> */
    private array $translations = [];

    /**
     * Create a new instance.
     */
    public function __construct(
        private readonly Client $client,
        private readonly Resource $resource,
    ) {
    }

    /**
     * Retrieve a translation.
     *
     * @param string $languageCode The language code.
     *
     * @return Translation
     *
     * @throws OutOfBoundsException When the requested language is not in the list.
     */
    public function get(string $languageCode): Translation
    {
        $this->load();

        foreach ($this->translations as $translation) {
            if ($translation->getLanguage()->getLanguageCode() === $languageCode) {
                return $translation;
            }
        }

        throw new OutOfBoundsException('Language not in list: ' . $languageCode);
    }

    /**
     * Check if a translation is in the list.
     *
     * @param string $name The lang code.
     */
    public function has(string $name): bool
    {
        return in_array($name, $this->codes());
    }

    /**
     * Retrieve the language codes.
     *
     * @return list<string>
     */
    public function codes(): array
    {
        $this->load();
        return array_map(
            fn (Translation $model): string => $model->getLanguage()->getLanguageCode(),
            $this->translations
        );
    }

    public function getIterator(): Traversable
    {
        $this->load();
        foreach ($this->translations as $translation) {
            yield $translation;
        }
    }

    private function load(): void
    {
        if ([] !== $this->translations) {
            return;
        }

        $languages = $this->resource->getProject()->languages()->getIterator();
        foreach ($languages as $language) {
            $this->translations[] = $this->translationModel($language);
        }
    }

    private function translationModel(
        Language $language,
    ): Translation {
        return new Translation(
            $this->client,
            $this->resource,
            $language,
        );
    }
}
