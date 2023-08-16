<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use DateTimeInterface;

class ResourceResponseAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The order that the resource string appears in it's container.
     * In case of files appearance order is extracted automatically,
     * where in other cases this may be missing.
     *
     * @var int|null
     */
    protected $appearanceOrder;
    /**
     * The maximum translation string character length, excluding variables. Use value 0 to remove the existing character limit.
     *
     * @var int|null
     */
    protected $characterLimit;
    /**
     * Additional context added, in order to link the resource string
     * to the environment in which the communication takes
     * place and/or disambiguate resource strings with the same content.
     * Context can be multiple substrings, concatenated with some separator.
     *
     * @var string
     */
    protected $context;
    /**
     * The date the resource string was created.
     *
     * @var DateTimeInterface
     */
    protected $datetimeCreated;
    /**
     * Developer comment gives additional information about the usage of this
     * string and/or technical details relevant to this string.
     *
     * @var string|null
     */
    protected $developerComment;
    /**
     * Additional translation instructions. Usually provided if the `developer_comment` is not present or not sufficiently clear. The maximum length should be up to 1000 characters.
     *
     * @var string|null
     */
    protected $instructions;
    /**
     * The identifier of the resource string in it's container.
     * In cases where two resource strings in the same container share the same key,
     * `context` is also used to disambiguate the identity of each resource string.
     *
     * @var string
     */
    protected $key;
    /**
     * The date the resource string's metadata were last updated. Examples of such attributes are `tags` and `character limit`.
     *
     * @var DateTimeInterface
     */
    protected $metadataDatetimeModified;
    /**
     * The occurrences of the resource string in the source code.
     *
     * @var string|null
     */
    protected $occurrences;
    /**
     * If the resource string is pluralized or not.
     *
     * @var bool
     */
    protected $pluralized;
    /**
     * The hash of the resource string. This is calculated as the hexadecimal digest on the md5 hash of the concatenation of the key and the context. More info [here](https://help.transifex.com/en/articles/6649327-how-string-hashes-are-calculated).
     *
     * @var string
     */
    protected $stringHash;
    /**
     * Dictionary with the translation content.
     * For pluralized resource strings, the keys should be all the
     * available plural rules for source language, as defined in CLDR,
     * and the values the actual content for each plural rule.
     *
     * For non-pluralized resource strings, only the default plural rule
     * ('other') is required.
     *
     * @var ResourceStringsAttributesStrings
     */
    protected $strings;
    /**
     * The date the resource string's content was last updated.
     *
     * @var DateTimeInterface
     */
    protected $stringsDatetimeModified;
    /**
     * List of tags for the resource string.
     *
     * @var string[]
     */
    protected $tags;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The order that the resource string appears in it's container.
     * In case of files appearance order is extracted automatically,
     * where in other cases this may be missing.
     */
    public function getAppearanceOrder(): ?int
    {
        return $this->appearanceOrder;
    }

    /**
     * The order that the resource string appears in it's container.
     * In case of files appearance order is extracted automatically,
     * where in other cases this may be missing.
     */
    public function setAppearanceOrder(?int $appearanceOrder): self
    {
        $this->initialized['appearanceOrder'] = true;
        $this->appearanceOrder = $appearanceOrder;

        return $this;
    }

    /**
     * The maximum translation string character length, excluding variables. Use value 0 to remove the existing character limit.
     */
    public function getCharacterLimit(): ?int
    {
        return $this->characterLimit;
    }

    /**
     * The maximum translation string character length, excluding variables. Use value 0 to remove the existing character limit.
     */
    public function setCharacterLimit(?int $characterLimit): self
    {
        $this->initialized['characterLimit'] = true;
        $this->characterLimit = $characterLimit;

        return $this;
    }

    /**
     * Additional context added, in order to link the resource string
     * to the environment in which the communication takes
     * place and/or disambiguate resource strings with the same content.
     * Context can be multiple substrings, concatenated with some separator.
     */
    public function getContext(): string
    {
        return $this->context;
    }

    /**
     * Additional context added, in order to link the resource string
     * to the environment in which the communication takes
     * place and/or disambiguate resource strings with the same content.
     * Context can be multiple substrings, concatenated with some separator.
     */
    public function setContext(string $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;

        return $this;
    }

    /**
     * The date the resource string was created.
     */
    public function getDatetimeCreated(): DateTimeInterface
    {
        return $this->datetimeCreated;
    }

    /**
     * The date the resource string was created.
     */
    public function setDatetimeCreated(DateTimeInterface $datetimeCreated): self
    {
        $this->initialized['datetimeCreated'] = true;
        $this->datetimeCreated = $datetimeCreated;

        return $this;
    }

    /**
     * Developer comment gives additional information about the usage of this
     * string and/or technical details relevant to this string.
     */
    public function getDeveloperComment(): ?string
    {
        return $this->developerComment;
    }

    /**
     * Developer comment gives additional information about the usage of this
     * string and/or technical details relevant to this string.
     */
    public function setDeveloperComment(?string $developerComment): self
    {
        $this->initialized['developerComment'] = true;
        $this->developerComment = $developerComment;

        return $this;
    }

    /**
     * Additional translation instructions. Usually provided if the `developer_comment` is not present or not sufficiently clear. The maximum length should be up to 1000 characters.
     */
    public function getInstructions(): ?string
    {
        return $this->instructions;
    }

    /**
     * Additional translation instructions. Usually provided if the `developer_comment` is not present or not sufficiently clear. The maximum length should be up to 1000 characters.
     */
    public function setInstructions(?string $instructions): self
    {
        $this->initialized['instructions'] = true;
        $this->instructions = $instructions;

        return $this;
    }

    /**
     * The identifier of the resource string in it's container.
     * In cases where two resource strings in the same container share the same key,
     * `context` is also used to disambiguate the identity of each resource string.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * The identifier of the resource string in it's container.
     * In cases where two resource strings in the same container share the same key,
     * `context` is also used to disambiguate the identity of each resource string.
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;

        return $this;
    }

    /**
     * The date the resource string's metadata were last updated. Examples of such attributes are `tags` and `character limit`.
     */
    public function getMetadataDatetimeModified(): DateTimeInterface
    {
        return $this->metadataDatetimeModified;
    }

    /**
     * The date the resource string's metadata were last updated. Examples of such attributes are `tags` and `character limit`.
     */
    public function setMetadataDatetimeModified(DateTimeInterface $metadataDatetimeModified): self
    {
        $this->initialized['metadataDatetimeModified'] = true;
        $this->metadataDatetimeModified = $metadataDatetimeModified;

        return $this;
    }

    /**
     * The occurrences of the resource string in the source code.
     */
    public function getOccurrences(): ?string
    {
        return $this->occurrences;
    }

    /**
     * The occurrences of the resource string in the source code.
     */
    public function setOccurrences(?string $occurrences): self
    {
        $this->initialized['occurrences'] = true;
        $this->occurrences = $occurrences;

        return $this;
    }

    /**
     * If the resource string is pluralized or not.
     */
    public function getPluralized(): bool
    {
        return $this->pluralized;
    }

    /**
     * If the resource string is pluralized or not.
     */
    public function setPluralized(bool $pluralized): self
    {
        $this->initialized['pluralized'] = true;
        $this->pluralized = $pluralized;

        return $this;
    }

    /**
     * The hash of the resource string. This is calculated as the hexadecimal digest on the md5 hash of the concatenation of the key and the context. More info [here](https://help.transifex.com/en/articles/6649327-how-string-hashes-are-calculated).
     */
    public function getStringHash(): string
    {
        return $this->stringHash;
    }

    /**
     * The hash of the resource string. This is calculated as the hexadecimal digest on the md5 hash of the concatenation of the key and the context. More info [here](https://help.transifex.com/en/articles/6649327-how-string-hashes-are-calculated).
     */
    public function setStringHash(string $stringHash): self
    {
        $this->initialized['stringHash'] = true;
        $this->stringHash = $stringHash;

        return $this;
    }

    /**
     * Dictionary with the translation content.
     * For pluralized resource strings, the keys should be all the
     * available plural rules for source language, as defined in CLDR,
     * and the values the actual content for each plural rule.
     *
     * For non-pluralized resource strings, only the default plural rule
     * ('other') is required.
     */
    public function getStrings(): ResourceStringsAttributesStrings
    {
        return $this->strings;
    }

    /**
     * Dictionary with the translation content.
     * For pluralized resource strings, the keys should be all the
     * available plural rules for source language, as defined in CLDR,
     * and the values the actual content for each plural rule.
     *
     * For non-pluralized resource strings, only the default plural rule
     * ('other') is required.
     */
    public function setStrings(ResourceStringsAttributesStrings $strings): self
    {
        $this->initialized['strings'] = true;
        $this->strings = $strings;

        return $this;
    }

    /**
     * The date the resource string's content was last updated.
     */
    public function getStringsDatetimeModified(): DateTimeInterface
    {
        return $this->stringsDatetimeModified;
    }

    /**
     * The date the resource string's content was last updated.
     */
    public function setStringsDatetimeModified(DateTimeInterface $stringsDatetimeModified): self
    {
        $this->initialized['stringsDatetimeModified'] = true;
        $this->stringsDatetimeModified = $stringsDatetimeModified;

        return $this;
    }

    /**
     * List of tags for the resource string.
     *
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    /**
     * List of tags for the resource string.
     *
     * @param string[] $tags
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;

        return $this;
    }
}
