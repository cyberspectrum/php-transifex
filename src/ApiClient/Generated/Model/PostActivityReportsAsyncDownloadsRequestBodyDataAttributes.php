<?php

declare(strict_types=1);

/*
 * NOTE: This file is auto generated.
 *
 * DO NOT EDIT MANUALLY.
 */

namespace CyberSpectrum\PhpTransifex\ApiClient\Generated\Model;

use DateTimeInterface;

class PostActivityReportsAsyncDownloadsRequestBodyDataAttributes
{
    /**
     * @var array<string, bool>
     */
    protected array $initialized = [];
    /**
     * Date, will be treated as UTC by the API.
     *
     * @var DateTimeInterface
     */
    protected $dateFrom;
    /**
     * Date, will be treated as UTC by the API.
     *
     * @var DateTimeInterface
     */
    protected $dateTo;

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }

    /**
     * Date, will be treated as UTC by the API.
     */
    public function getDateFrom(): DateTimeInterface
    {
        return $this->dateFrom;
    }

    /**
     * Date, will be treated as UTC by the API.
     */
    public function setDateFrom(DateTimeInterface $dateFrom): self
    {
        $this->initialized['dateFrom'] = true;
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Date, will be treated as UTC by the API.
     */
    public function getDateTo(): DateTimeInterface
    {
        return $this->dateTo;
    }

    /**
     * Date, will be treated as UTC by the API.
     */
    public function setDateTo(DateTimeInterface $dateTo): self
    {
        $this->initialized['dateTo'] = true;
        $this->dateTo = $dateTo;

        return $this;
    }
}
