<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringsRequestBodyDataAttributes1
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The order that the resource string appears in it's container.
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
     * Additional context added, in order to link the resource string.
     *
     * @var string
     */
    protected $context;
    /**
     * Developer comment gives additional information about the usage of this.
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
     *
     * @var string
     */
    protected $key;
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
     * Dictionary with the translation content.
     *
     * @var ResourceStringsAttributesStrings
     */
    protected $strings;
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
    where in other cases this may be missing
     */
    public function getAppearanceOrder(): ?int
    {
        return $this->appearanceOrder;
    }

    /**
     * The order that the resource string appears in it's container.
    where in other cases this may be missing
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
     * Additional context added, in order to link the resource string.
    Context can be multiple substrings, concatenated with some separator.
     */
    public function getContext(): string
    {
        return $this->context;
    }

    /**
     * Additional context added, in order to link the resource string.
    Context can be multiple substrings, concatenated with some separator.
     */
    public function setContext(string $context): self
    {
        $this->initialized['context'] = true;
        $this->context = $context;

        return $this;
    }

    /**
     * Developer comment gives additional information about the usage of this.
    string and/or technical details relevant to this string.
     */
    public function getDeveloperComment(): ?string
    {
        return $this->developerComment;
    }

    /**
     * Developer comment gives additional information about the usage of this.
    string and/or technical details relevant to this string.
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
    `context` is also used to disambiguate the identity of each resource string.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * The identifier of the resource string in it's container.
    `context` is also used to disambiguate the identity of each resource string.
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;

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
     * Dictionary with the translation content.
    ('other') is required.
     */
    public function getStrings(): ResourceStringsAttributesStrings
    {
        return $this->strings;
    }

    /**
     * Dictionary with the translation content.
    ('other') is required.
     */
    public function setStrings(ResourceStringsAttributesStrings $strings): self
    {
        $this->initialized['strings'] = true;
        $this->strings = $strings;

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
