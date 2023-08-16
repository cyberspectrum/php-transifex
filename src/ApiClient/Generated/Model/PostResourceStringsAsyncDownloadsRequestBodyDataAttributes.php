<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class PostResourceStringsAsyncDownloadsRequestBodyDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * The url that will be called when the processing is completed.
     * For more details about callback_url you can refer to [Asynchronous Processing](#section/Asynchronous-Processing) section.
     *
     * @var string|null
     */
    protected $callbackUrl;
    /**
     * The encoding of the file.
     *
     * @var string
     */
    protected $contentEncoding = 'text';
    /**
     * The file type.
     *
     * @var string
     */
    protected $fileType = 'default';
    /**
     * Generate mock string translations with a ~20% default length increase in characters.<br>
     * More about pseudo-localization: https://help.transifex.com/en/articles/6231812-testing-localized-apps-with-pseudo-files.
     *
     * @var bool
     */
    protected $pseudo = false;
    /**
     * Length increase percentage of mock string translations.<br>
     * Applied only when <i>pseudo</i> flag is True. Overrides default pseudo length.
     *
     * @var int|null
     */
    protected $pseudoLengthIncrease;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * The url that will be called when the processing is completed.
     * For more details about callback_url you can refer to [Asynchronous Processing](#section/Asynchronous-Processing) section.
     */
    public function getCallbackUrl(): ?string
    {
        return $this->callbackUrl;
    }

    /**
     * The url that will be called when the processing is completed.
     * For more details about callback_url you can refer to [Asynchronous Processing](#section/Asynchronous-Processing) section.
     */
    public function setCallbackUrl(?string $callbackUrl): self
    {
        $this->initialized['callbackUrl'] = true;
        $this->callbackUrl = $callbackUrl;

        return $this;
    }

    /**
     * The encoding of the file.
     */
    public function getContentEncoding(): string
    {
        return $this->contentEncoding;
    }

    /**
     * The encoding of the file.
     */
    public function setContentEncoding(string $contentEncoding): self
    {
        $this->initialized['contentEncoding'] = true;
        $this->contentEncoding = $contentEncoding;

        return $this;
    }

    /**
     * The file type.
     */
    public function getFileType(): string
    {
        return $this->fileType;
    }

    /**
     * The file type.
     */
    public function setFileType(string $fileType): self
    {
        $this->initialized['fileType'] = true;
        $this->fileType = $fileType;

        return $this;
    }

    /**
     * Generate mock string translations with a ~20% default length increase in characters.<br>
     * More about pseudo-localization: https://help.transifex.com/en/articles/6231812-testing-localized-apps-with-pseudo-files.
     */
    public function getPseudo(): bool
    {
        return $this->pseudo;
    }

    /**
     * Generate mock string translations with a ~20% default length increase in characters.<br>
     * More about pseudo-localization: https://help.transifex.com/en/articles/6231812-testing-localized-apps-with-pseudo-files.
     */
    public function setPseudo(bool $pseudo): self
    {
        $this->initialized['pseudo'] = true;
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Length increase percentage of mock string translations.<br>
     * Applied only when <i>pseudo</i> flag is True. Overrides default pseudo length.
     */
    public function getPseudoLengthIncrease(): ?int
    {
        return $this->pseudoLengthIncrease;
    }

    /**
     * Length increase percentage of mock string translations.<br>
     * Applied only when <i>pseudo</i> flag is True. Overrides default pseudo length.
     */
    public function setPseudoLengthIncrease(?int $pseudoLengthIncrease): self
    {
        $this->initialized['pseudoLengthIncrease'] = true;
        $this->pseudoLengthIncrease = $pseudoLengthIncrease;

        return $this;
    }
}
