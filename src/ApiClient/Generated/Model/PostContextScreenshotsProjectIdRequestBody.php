<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostContextScreenshotsProjectIdRequestBody
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The context screenshot file to upload.
     *
     * @var string
     */
    protected $content;
    /**
     * name of the screenshot.
     *
     * @var string
     */
    protected $name;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The context screenshot file to upload.
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * The context screenshot file to upload.
     */
    public function setContent(string $content): self
    {
        $this->initialized['content'] = true;
        $this->content = $content;

        return $this;
    }

    /**
     * name of the screenshot.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * name of the screenshot.
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }
}
