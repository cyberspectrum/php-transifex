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

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetLanguages200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetLanguagesResponseDataAttributes;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\GetProjectsProjectIdLanguages200Response;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ProjectsProjectIdRelationshipsLanguagesDataItems;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Model\ProjectsProjectIdRelationshipsLanguagesRequestBody;
use CyberSpectrum\PhpTransifex\Client;
use InvalidArgumentException;
use IteratorAggregate;
use OutOfBoundsException;
use Traversable;

use function array_map;
use function assert;
use function count;
use function in_array;

/**
 * This class wraps the language list.
 *
 * @implements IteratorAggregate<int, Language>
 */
final class LanguageList implements IteratorAggregate
{
    /** @var list<Language> */
    private array $languages = [];

    public function __construct(
        private readonly Client $client,
        private readonly Project $project
    ) {
    }

    /**
     * Retrieve a language.
     *
     * @param string $name The language code.
     *
     * @throws OutOfBoundsException When the requested language is not in the list.
     */
    public function get(string $name): Language
    {
        $this->load();
        foreach ($this->languages as $languageModel) {
            if ($languageModel->getLanguageCode() === $name) {
                return $languageModel;
            }
        }

        throw new OutOfBoundsException('Language not in list: ' . $name);
    }

    /**
     * Check if a language is in the list.
     *
     * @param string $name The lang code.
     */
    public function has(string $name): bool
    {
        return in_array($name, $this->codes());
    }

    /**
     * Add a language to the project.
     *
     * @param string $langCode The language code.
     *
     * @throws InvalidArgumentException When the resource is already in the list.
     */
    public function add(string $langCode): Language
    {
        if ($this->has($langCode)) {
            throw new InvalidArgumentException('Language already in list: ' . $langCode);
        }

        $languages = $this->client->getLanguage(['code' => $langCode]);
        assert($languages instanceof GetLanguages200Response);
        $data = $languages->getData();
        if (count($data) !== 1) {
            throw new InvalidArgumentException(
                'Failed to determine language Id from language code ' . $langCode
            );
        }

        $language = $this->languageModel($data[0]->getId(), $data[0]->getAttributes());

        $this->client->postProjectsByProjectIdRelationshipsLanguage(
            $this->project->getProjectId(),
            (new ProjectsProjectIdRelationshipsLanguagesRequestBody())->setData([
                (new ProjectsProjectIdRelationshipsLanguagesDataItems())
                    ->setId($language->getLanguageId())
                    ->setType('languages')
            ])
        );

        $this->languages[] = $language;

        return $language;
    }

    /**
     * Remove a language from the project.
     *
     * @param string $langCode The language code.
     */
    public function remove(string $langCode): void
    {
        $language = $this->get($langCode);

        $this->client->deleteProjectsByProjectIdRelationshipsLanguage(
            $this->project->getProjectId(),
            (new ProjectsProjectIdRelationshipsLanguagesRequestBody())->setData([
                (new ProjectsProjectIdRelationshipsLanguagesDataItems())
                    ->setId($language->getLanguageId())
                    ->setType('languages')
            ])
        );
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
            fn (Language $languageModel): string => $languageModel->getLanguageCode(),
            $this->languages
        );
    }

    public function getIterator(): Traversable
    {
        $this->load();
        foreach ($this->languages as $language) {
            yield $language;
        }
    }

    private function load(): void
    {
        if ([] !== $this->languages) {
            return;
        }

        $result = $this->client->getProjectsByProjectIdLanguage($this->project->getProjectId());
        assert($result instanceof GetProjectsProjectIdLanguages200Response);
        foreach ($result->getData() as $languageData) {
            $attributes = $languageData->getAttributes();
            $this->languages[] = $this->languageModel($languageData->getId(), $attributes);
        }
    }

    private function languageModel(string $languageId, GetLanguagesResponseDataAttributes $attributes): Language
    {
        return new Language(
            $languageId,
            $attributes->getCode(),
            $attributes->getName(),
            $attributes->getPluralEquation(),
            $attributes->getRtl()
        );
    }
}
