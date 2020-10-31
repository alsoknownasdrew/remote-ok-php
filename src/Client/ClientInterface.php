<?php

namespace Alsoknownasdrew\RemoteOK\Client;


use Alsoknownasdrew\RemoteOK\Position\PositionInterface;
use Exception;

/**
 * Class Client
 *
 * @package Alsoknownasdrew\RemoteOK
 */
interface ClientInterface
{
    /** @var string */
    public const BASE_URL = 'https://remoteok.io/api';

    /**
     * @return PositionInterface[]
     *
     * @throws Exception
     */
    public function positions(): array;
}
