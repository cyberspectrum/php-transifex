<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetLanguagesResponseDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The language code as defined in CLDR.
     *
     * @var string
     */
    protected $code;
    /**
     * The name of the Language as defined in CLDR.
     *
     * @var string
     */
    protected $name;
    /**
     * The language plural rule equation as defined in CLDR.
     *
     * @var string
     */
    protected $pluralEquation;
    /**
     * Object of plural rules for Language as defined in CLDR.
     *
     * @var array<string, mixed>
     */
    protected $pluralRules;
    /**
     * If the language is rlt.
     *
     * @var bool
     */
    protected $rtl;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The language code as defined in CLDR.
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * The language code as defined in CLDR.
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;

        return $this;
    }

    /**
     * The name of the Language as defined in CLDR.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the Language as defined in CLDR.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * The language plural rule equation as defined in CLDR.
     */
    public function getPluralEquation(): string
    {
        return $this->pluralEquation;
    }

    /**
     * The language plural rule equation as defined in CLDR.
     */
    public function setPluralEquation(string $pluralEquation): self
    {
        $this->initialized['pluralEquation'] = true;
        $this->pluralEquation = $pluralEquation;

        return $this;
    }

    /**
     * Object of plural rules for Language as defined in CLDR.
     *
     * @return array<string, mixed>
     */
    public function getPluralRules(): iterable
    {
        return $this->pluralRules;
    }

    /**
     * Object of plural rules for Language as defined in CLDR.
     *
     * @param array<string, mixed> $pluralRules
     */
    public function setPluralRules(iterable $pluralRules): self
    {
        $this->initialized['pluralRules'] = true;
        $this->pluralRules = $pluralRules;

        return $this;
    }

    /**
     * If the language is rlt.
     */
    public function getRtl(): bool
    {
        return $this->rtl;
    }

    /**
     * If the language is rlt.
     */
    public function setRtl(bool $rtl): self
    {
        $this->initialized['rtl'] = true;
        $this->rtl = $rtl;

        return $this;
    }
}
