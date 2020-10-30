<?php

declare(strict_types=1);

namespace Alsoknownasdrew\RemoteOK\Client\Factory;

use Alsoknownasdrew\RemoteOK\Client\Client;
use Alsoknownasdrew\RemoteOK\Client\ClientInterface;
use Laminas\Diactoros\RequestFactory;
use Laminas\Diactoros\UriFactory;

/**
 * Class ClientFactory
 *
 * @package Alsoknownasdrew\RemoteOK
 */
class ClientFactory implements ClientFactoryInterface
{
    /**
     * @return ClientInterface
     */
    public static function create(): ClientInterface
    {
        return new Client(
            new \GuzzleHttp\Client(),
            new RequestFactory(),
            new UriFactory()
        );
    }
}
