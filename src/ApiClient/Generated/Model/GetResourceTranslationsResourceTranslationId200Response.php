<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

class GetResourceTranslationsResourceTranslationId200Response
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * @var ResourceTranslationsResponseData
     */
    protected $data;
    /**
     * List of included resource string objects.
     *
     * @var ResourceResponse[]
     */
    protected $included;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    public function getData(): ResourceTranslationsResponseData
    {
        return $this->data;
    }

    public function setData(ResourceTranslationsResponseData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;

        return $this;
    }

    /**
     * List of included resource string objects.
     *
     * @return ResourceResponse[]
     */
    public function getIncluded(): array
    {
        return $this->included;
    }

    /**
     * List of included resource string objects.
     *
     * @param ResourceResponse[] $included
     */
    public function setIncluded(array $included): self
    {
        $this->initialized['included'] = true;
        $this->included = $included;

        return $this;
    }
}
