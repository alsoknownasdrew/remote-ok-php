<?php

declare(strict_types=1);

namespace Alsoknownasdrew\RemoteOK\Client;

use Alsoknownasdrew\RemoteOK\Exception\ClientException;
use Alsoknownasdrew\RemoteOK\Exception\PositionsNotAvailableException;
use Alsoknownasdrew\RemoteOK\Position\Factory\PositionFactory;
use Alsoknownasdrew\RemoteOK\Position\PositionInterface;
use Exception;
use JsonException;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface as PsrClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriFactoryInterface;

/**
 * Class Client
 *
 * @package Alsoknownasdrew\RemoteOK
 */
class Client implements ClientInterface
{
    /** @var PsrClientInterface */
    private $client;

    /** @var RequestFactoryInterface */
    private $requestFactory;

    /** @var UriFactoryInterface */
    private $uriFactory;

    /**
     * Client constructor.
     *
     * @param PsrClientInterface $client
     * @param RequestFactoryInterface $requestFactory
     * @param UriFactoryInterface $uriFactory
     */
    public function __construct(PsrClientInterface $client, RequestFactoryInterface $requestFactory, UriFactoryInterface $uriFactory)
    {
        $this->client = $client;
        $this->requestFactory = $requestFactory;
        $this->uriFactory = $uriFactory;
    }

    /**
     * @param int|null $limit
     * @return PositionInterface[]
     *
     * @throws JsonException
     */
    public function positions(int $limit = null): array
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

        return $this->getPositionsFromResponse($response, $limit);
    }

    /**
     * @param ResponseInterface $response
     *
     * @param int|null $limit
     * @return PositionInterface[]
     *
     * @throws JsonException
     */
    private function getPositionsFromResponse(ResponseInterface $response, ?int $limit): array
    {
        $positionsData = json_decode($response->getBody()->getContents(), true, 512, JSON_THROW_ON_ERROR);
        $positionsData = $this->removeLegalMessage($positionsData);
        if ($limit !== null) {
            $positionsData = \array_slice($positionsData, 0, $limit);
        }

        return array_map([$this, 'createPosition'], $positionsData);
    }

    /**
     * @param array $positionsData
     *
     * @return array
     */
    private function removeLegalMessage(array $positionsData): array
    {
        array_shift($positionsData);

        return $positionsData;
    }

    /**
     * @param array $position
     *
     * @return PositionInterface
     */
    private function createPosition(array $position): PositionInterface
    {
        return PositionFactory::createFromArray($position);
    }
}
