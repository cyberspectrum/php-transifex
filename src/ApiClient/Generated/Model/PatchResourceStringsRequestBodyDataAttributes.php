<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchResourceStringsRequestBodyDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The maximum translation string character length, excluding variables. Use value 0 to remove the existing character limit.
     *
     * @var int|null
     */
    protected $characterLimit;
    /**
     * Additional translation instructions. Usually provided if the `developer_comment` is not present or not sufficiently clear. The maximum length should be up to 1000 characters.
     *
     * @var string|null
     */
    protected $instructions;
    /**
     * Dictionary with the translation content.
     *
     * @var PatchResourceStringsRequestBodyDataAttributesStrings
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
     * Dictionary with the translation content.
    returned. Changing the source string does not remove its translations.
     */
    public function getStrings(): PatchResourceStringsRequestBodyDataAttributesStrings
    {
        return $this->strings;
    }

    /**
     * Dictionary with the translation content.
    returned. Changing the source string does not remove its translations.
     */
    public function setStrings(PatchResourceStringsRequestBodyDataAttributesStrings $strings): self
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
