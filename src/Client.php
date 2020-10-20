<?php

declare(strict_types=1);

namespace Alsoknownasdrew\RemoteOK;

use Alsoknownasdrew\RemoteOK\Exception\ClientException;
use Alsoknownasdrew\RemoteOK\Exception\PositionsNotAvailableException;
use Exception;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriFactoryInterface;

/**
 * Class Client
 * @package Alsoknownasdrew\RemoteOK
 */
class Client
{
    private const BASE_URL = 'https://remoteok.io/api';

    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @var RequestFactoryInterface
     */
    private $requestFactory;

    /**
     * @var UriFactoryInterface
     */
    private $uriFactory;

    /**
     * Client constructor.
     * @param ClientInterface $client
     * @param RequestFactoryInterface $requestFactory
     * @param UriFactoryInterface $uriFactory
     */
    public function __construct(ClientInterface $client, RequestFactoryInterface $requestFactory, UriFactoryInterface $uriFactory)
    {
        $this->client = $client;
        $this->requestFactory = $requestFactory;
        $this->uriFactory = $uriFactory;
    }

    /**
     * @return Position[]
     * @throws Exception
     */
    public function positions(): array
    {
        $uri = $this->uriFactory->createUri(self::BASE_URL);
        $request = $this->requestFactory->createRequest('get', $uri);
        try {
            $response = $this->client->sendRequest($request);
        } catch (ClientExceptionInterface $exception) {
            throw new ClientException("Couldn't fetch positions", 0, $exception);
        }

        if ($response->getStatusCode() !== 200) {
            throw new PositionsNotAvailableException('Positions not available', $response->getStatusCode());
        }

        return $this->getPositionsFromResponse($response);
    }

    /**
     * @param ResponseInterface $response
     * @return Position[]
     * @throws JsonException
     */
    private function getPositionsFromResponse(ResponseInterface $response): array
    {
        $positionsData = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
        $positionsData = $this->removeLegalMessage($positionsData);

        return array_map('self::createPosition', $positionsData);
    }

    /**
     * @param array $positionsData
     * @return array
     */
    private function removeLegalMessage(array $positionsData): array
    {
        array_shift($positionsData);

        return $positionsData;
    }

    /**
     * @param array $position
     * @return Position
     */
    private function createPosition(array $position): Position
    {
        return PositionFactory::createFromArray($position);
    }
}
