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

namespace CyberSpectrum\PhpTransifex;

use CyberSpectrum\PhpTransifex\ApiClient\Generated\Client as ClientBase;
use CyberSpectrum\PhpTransifex\ApiClient\Generated\Runtime\Client\Endpoint;
use Psr\Http\Message\ResponseInterface;

final class Client extends ClientBase
{
    public function parseEndpoint(Endpoint $endpoint, ResponseInterface $response): object
    {
        $result = $endpoint->parseResponse($response, $this->serializer);
        assert(is_object($result));

        return $result;
    }
}
