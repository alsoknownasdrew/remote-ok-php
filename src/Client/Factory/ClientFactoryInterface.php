<?php

namespace Alsoknownasdrew\RemoteOK\Client\Factory;

use Alsoknownasdrew\RemoteOK\Client\ClientInterface;

/**
 * Class ClientFactory
 *
 * @package Alsoknownasdrew\RemoteOK
 */
interface ClientFactoryInterface
{
    /**
     * @return ClientInterface
     */
    public static function create(): ClientInterface;
}
