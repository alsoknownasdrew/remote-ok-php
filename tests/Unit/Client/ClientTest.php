<?php

namespace Alsoknownasdrew\RemoteOKTest\Unit\Client;

use Alsoknownasdrew\RemoteOK\Client\Client;
use Alsoknownasdrew\RemoteOK\Position\PositionInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriFactoryInterface;

/**
 * Class ClientTest
 *
 * @package Alsoknownasdrew\RemoteOKTest\Unit\Client
 */
class ClientTest extends TestCase
{
    /** @var Client */
    private $client;

    /** @var MockObject|ClientInterface */
    private $httpClientMock;

    /** @var MockObject|RequestFactoryInterface */
    private $requestFactoryMock;

    /** @var MockObject|UriFactoryInterface */
    private $uriFactoryMock;

    protected function setUp(): void
    {
        $this->httpClientMock = $this->createMock(ClientInterface::class);
        $this->requestFactoryMock = $this->createMock(RequestFactoryInterface::class);
        $this->uriFactoryMock = $this->createMock(UriFactoryInterface::class);
        $this->client = new Client(
            $this->httpClientMock,
            $this->requestFactoryMock,
            $this->uriFactoryMock
        );
    }

    public function apiResponseBodyDataProvider(): array
    {
        return [
            [
                file_get_contents(__DIR__ . '/data/apiResponseBody.json')
            ]
        ];
    }

    /**
     * @dataProvider apiResponseBodyDataProvider
     * @param string $apiResponseBody
     */
    public function testReturnsArrayOfPositions(string $apiResponseBody): void
    {
        $streamMock = $this->createMock(StreamInterface::class);
        $streamMock->method('getContents')->willReturn($apiResponseBody);

        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getBody')->willReturn($streamMock);
        $responseMock->method('getStatusCode')->willReturn(200);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($responseMock);

        $positions = $this->client->positions();
        foreach ($positions as $position) {
            self::assertInstanceOf(PositionInterface::class, $position);
        }
    }

    /**
     * @dataProvider apiResponseBodyDataProvider
     * @param string $apiResponseBody
     */
    public function testLimitsResults(string $apiResponseBody): void
    {
        $streamMock = $this->createMock(StreamInterface::class);
        $streamMock->method('getContents')->willReturn($apiResponseBody);

        $responseMock = $this->createMock(ResponseInterface::class);
        $responseMock->method('getBody')->willReturn($streamMock);
        $responseMock->method('getStatusCode')->willReturn(200);

        $this->httpClientMock
            ->method('sendRequest')
            ->willReturn($responseMock);

        $positions = $this->client->positions(1);
        self::assertCount(1, $positions);
    }
}
