<?php

/**
 * This file is part of cyberspectrum/php-transifex.
 *
 * (c) 2017-2023 Christian Schiffler.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    PhpTransifex
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  2023 Christian Schiffler.
 * @license    https://github.com/cyberspectrum/php-transifex/blob/master/LICENSE MIT
 * @filesource
 */

declare(strict_types=1);

namespace CyberSpectrum\PhpTransifex\ApiClient\Middleware;

use Closure;
use Http\Client\Common\Plugin;
use Http\Promise\Promise;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class RequestTiming implements Plugin
{
    public const HEADER_CURRENT_DURATION = 'X-Duration';
    public const HEADER_MIN_DURATION = 'X-Duration-Min';
    public const HEADER_MAX_DURATION = 'X-Duration-Max';
    public const HEADER_AVG_DURATION = 'X-Duration-Avg';

    /** @var array<string, float> */
    private array $pending = [];
    /** @var array<string, float> */
    private array $totalTime = [];
    /** @var array<string, float> */
    private array $requests = [];
    /** @var array<string, float> */
    private array $min = [];
    /** @var array<string, float> */
    private array $max = [];

    /** @SuppressWarnings(PHPMD.UnusedFormalParameter) */
    public function handleRequest(RequestInterface $request, callable $next, callable $first): Promise
    {
        $this->pending[$this->requestId($request)] = $this->time();

        $promise = $next($request);

        return $promise->then($this->onSuccess($request));
    }

    /** @psalm-return Closure(ResponseInterface): ResponseInterface */
    protected function onSuccess(RequestInterface $request): Closure
    {
        return function (ResponseInterface $response) use ($request) {
            $requestId = $this->requestId($request);
            if (null !== ($startTime = $this->pending[$requestId] ?? null)) {
                unset($this->pending[$requestId]);
                $duration = $this->time() - $startTime;

                $host = $request->getUri()->getHost();
                if (!isset($this->totalTime[$host])) {
                    $this->totalTime[$host] = 0;
                    $this->requests[$host] = 0;
                    $this->min[$host] = 10000000;
                    $this->max[$host] = 0;
                }
                $this->totalTime[$host] += $duration;
                $this->requests[$host]  += 1;
                if ($duration < $this->min[$host]) {
                    $this->min[$host] = $duration;
                }
                if ($duration > $this->max[$host]) {
                    $this->max[$host] = $duration;
                }

                return $response
                    ->withHeader(self::HEADER_CURRENT_DURATION, (string) round($duration, 2))
                    ->withHeader(self::HEADER_MIN_DURATION, (string) round($this->min[$host]))
                    ->withHeader(self::HEADER_MAX_DURATION, (string) round($this->max[$host]))
                    ->withHeader(
                        self::HEADER_AVG_DURATION,
                        (string) round($this->totalTime[$host] / $this->requests[$host])
                    );
            }

            return $response;
        };
    }

    private function requestId(RequestInterface $request): string
    {
        return spl_object_hash($request);
    }

    /**
     * Return the time in milliseconds.
     */
    private function time(): float
    {
        return microtime(true) * 1000;
    }
}
