<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PatchResourceStringsRequestBodyDataAttributesStrings
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var string
     */
    protected $few;
    /**
     * @var string
     */
    protected $many;
    /**
     * @var string
     */
    protected $one;
    /**
     * @var string
     */
    protected $other;
    /**
     * @var string
     */
    protected $two;
    /**
     * @var string
     */
    protected $zero;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getFew(): string
    {
        return $this->few;
    }

    public function setFew(string $few): self
    {
        $this->initialized['few'] = true;
        $this->few = $few;

        return $this;
    }

    public function getMany(): string
    {
        return $this->many;
    }

    public function setMany(string $many): self
    {
        $this->initialized['many'] = true;
        $this->many = $many;

        return $this;
    }

    public function getOne(): string
    {
        return $this->one;
    }

    public function setOne(string $one): self
    {
        $this->initialized['one'] = true;
        $this->one = $one;

        return $this;
    }

    public function getOther(): string
    {
        return $this->other;
    }

    public function setOther(string $other): self
    {
        $this->initialized['other'] = true;
        $this->other = $other;

        return $this;
    }

    public function getTwo(): string
    {
        return $this->two;
    }

    public function setTwo(string $two): self
    {
        $this->initialized['two'] = true;
        $this->two = $two;

        return $this;
    }

    public function getZero(): string
    {
        return $this->zero;
    }

    public function setZero(string $zero): self
    {
        $this->initialized['zero'] = true;
        $this->zero = $zero;

        return $this;
    }
}
