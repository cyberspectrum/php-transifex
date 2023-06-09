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

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetResourceTranslations200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsResponseDataAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsResponseDataAttributesStrings;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsResponseDataRelationships;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ResourceTranslationsResponseDataRelationships1;
use CyberSpectrum\PhpTransifex\Client;
use IteratorAggregate;
use OutOfBoundsException;
use Traversable;

use function assert;

/** @implements IteratorAggregate<int, TranslationString> */
final class TranslationStringList implements IteratorAggregate
{
    /** @var list<TranslationString> */
    private array $strings = [];

    /**
     * Create a new instance.
     */
    public function __construct(
        private readonly Client $client,
        private readonly Translation $translation,
    ) {
    }

    /**
     * Retrieve a translation.
     *
     * @param string $resourceStringId The resource string id.
     *
     * @throws OutOfBoundsException When the requested language is not in the list.
     */
    public function get(string $resourceStringId): TranslationString
    {
        $this->load();

        foreach ($this->strings as $string) {
            if ($string->getResourceStringId() === $resourceStringId) {
                return $string;
            }
        }

        throw new OutOfBoundsException('Resource string not in list: ' . $resourceStringId);
    }

    public function getIterator(): Traversable
    {
        $this->load();
        foreach ($this->strings as $translation) {
            yield $translation;
        }
    }

    private function load(): void
    {
        if ([] !== $this->strings) {
            return;
        }

        $result = $this->client->getResourceTranslation([
            'filter[resource]' => $this->translation->getResource()->getResourceId(),
            'filter[language]' => $this->translation->getLanguage()->getLanguageId(),
        ]);
        assert($result instanceof GetResourceTranslations200Response);
        foreach ($result->getData() as $resourceData) {
            $this->strings[] = $this->translationModel(
                $this->translation,
                $resourceData->getAttributes(),
                $resourceData->getRelationships(),
            );
        }
    }

    private function translationModel(
        Translation $translation,
        ResourceTranslationsResponseDataAttributes $attributes,
        ResourceTranslationsResponseDataRelationships1 $relationships
    ): TranslationString {
        return new TranslationString(
            $this->client,
            $translation,
            $relationships->getResourceString()->getData()->getId(),
            $attributes->getDatetimeCreated(),
            $attributes->getDatetimeProofread(),
            $attributes->getDatetimeReviewed(),
            $attributes->getDatetimeTranslated(),
            $attributes->getFinalized(),
            $attributes->getProofread(),
            $attributes->getReviewed(),
            $this->getUser($relationships->getTranslator()),
            $this->getUser($relationships->getReviewer()),
            $this->getUser($relationships->getProofreader()),
            $this->buildStrings($attributes->getStrings()),
        );
    }

    private function getUser(?ResourceTranslationsResponseDataRelationships $relationship): ?User
    {
        if (null === $relationship) {
            return null;
        }

        return new User($this->client, $relationship->getData()->getId());
    }

    /** @return array{few?: string, many?: string, one?: string, other?: string, two?: string, zero?:string}|null */
    private function buildStrings(?ResourceTranslationsResponseDataAttributesStrings $strings): ?array
    {
        $result = [];
        if (null === $strings) {
            return null;
        }
        if ($strings->isInitialized('few')) {
            $result['few'] = $strings->getFew();
        }
        if ($strings->isInitialized('many')) {
            $result['many'] = $strings->getMany();
        }
        if ($strings->isInitialized('one')) {
            $result['one'] = $strings->getOne();
        }
        if ($strings->isInitialized('other')) {
            $result['other'] = $strings->getOther();
        }
        if ($strings->isInitialized('two')) {
            $result['two'] = $strings->getTwo();
        }
        if ($strings->isInitialized('zero')) {
            $result['zero'] = $strings->getZero();
        }
        return $result;
    }
}
