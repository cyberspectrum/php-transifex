<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostContextScreenshotMapsRequestBodyDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * coordinate of the string position in the screenshot determined by measuring parallel to an x-axis, measured in pixels.
     *
     * @var float|null
     */
    protected $coordinateX;
    /**
     * coordinate of the string position in the screenshot determined by measuring parallel to an y-axis, measured in pixels.
     *
     * @var float|null
     */
    protected $coordinateY;
    /**
     * height of the string in screenshot, measured in pixels.
     *
     * @var float|null
     */
    protected $height;
    /**
     * width of the string in screenshot, measured in pixels.
     *
     * @var float|null
     */
    protected $width;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * coordinate of the string position in the screenshot determined by measuring parallel to an x-axis, measured in pixels.
     */
    public function getCoordinateX(): ?float
    {
        return $this->coordinateX;
    }

    /**
     * coordinate of the string position in the screenshot determined by measuring parallel to an x-axis, measured in pixels.
     */
    public function setCoordinateX(?float $coordinateX): self
    {
        $this->initialized['coordinateX'] = true;
        $this->coordinateX = $coordinateX;

        return $this;
    }

    /**
     * coordinate of the string position in the screenshot determined by measuring parallel to an y-axis, measured in pixels.
     */
    public function getCoordinateY(): ?float
    {
        return $this->coordinateY;
    }

    /**
     * coordinate of the string position in the screenshot determined by measuring parallel to an y-axis, measured in pixels.
     */
    public function setCoordinateY(?float $coordinateY): self
    {
        $this->initialized['coordinateY'] = true;
        $this->coordinateY = $coordinateY;

        return $this;
    }

    /**
     * height of the string in screenshot, measured in pixels.
     */
    public function getHeight(): ?float
    {
        return $this->height;
    }

    /**
     * height of the string in screenshot, measured in pixels.
     */
    public function setHeight(?float $height): self
    {
        $this->initialized['height'] = true;
        $this->height = $height;

        return $this;
    }

    /**
     * width of the string in screenshot, measured in pixels.
     */
    public function getWidth(): ?float
    {
        return $this->width;
    }

    /**
     * width of the string in screenshot, measured in pixels.
     */
    public function setWidth(?float $width): self
    {
        $this->initialized['width'] = true;
        $this->width = $width;

        return $this;
    }
}
