<?php

declare(strict_types=1);

namespace Alsoknownasdrew\RemoteOK;

use Laminas\Diactoros\RequestFactory;
use Laminas\Diactoros\UriFactory;

/**
 * Class ClientFactory
 * @package Alsoknownasdrew\RemoteOK
 */
class ClientFactory
{
    /**
     * @return Client
     */
    public static function create(): Client
    {
        return new Client(
            new \GuzzleHttp\Client(),
            new RequestFactory(),
            new UriFactory()
        );
    }
}
