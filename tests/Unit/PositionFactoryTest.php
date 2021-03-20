<?php

declare(strict_types=1);

namespace Alsoknownasdrew\RemoteOKTest\Unit;

use Alsoknownasdrew\RemoteOK\Company\CompanyInterface;
use Alsoknownasdrew\RemoteOK\Position\Factory\PositionFactory;
use Alsoknownasdrew\RemoteOK\Position\PositionInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class PositionFactoryTest
 *
 * @package Alsoknownasdrew\RemoteOKTest\Unit
 */
class PositionFactoryTest extends TestCase
{
    public function testCreatePositionWithOptionalData(): void
    {
        $positionRawData = [
            'company' => 'Acme Inc',
            'location' => 'Worldwide',
            'company_logo' => 'example.com/logo.png',
            'date' => '2021-03-17T18:15:05+00:00',
            'description' => 'A quick brown fox jumps over a lazy dog',
            'id' => '123',
            'original' => true,
            'slug' => 'lorem-ipsum',
            'tags' => [
                'dev',
                'java',
                'senior',
                'digital nomad'
            ],
            'position' => 'Senior Java Developer',
            'url' => 'https://remoteOK.io'
        ];
        $position = PositionFactory::createFromArray($positionRawData);

        self::assertInstanceOf(PositionInterface::class, $position);
        self::assertInstanceOf(CompanyInterface::class, $position->getCompany());
        self::assertSame($positionRawData['company'], $position->getCompany()->getName());
        self::assertSame($positionRawData['location'], $position->getCompany()->getLocation());
        self::assertSame($positionRawData['company_logo'], $position->getCompany()->getLogoUrl());
        self::assertSame($positionRawData['date'], $position->getCreatedAt()->format(DATE_ATOM));
        self::assertSame($positionRawData['description'], $position->getDescription());
        self::assertSame($positionRawData['id'], $position->getId());
        self::assertSame($positionRawData['original'], $position->isOriginal());
        self::assertSame($positionRawData['slug'], $position->getSlug());
        self::assertSame($positionRawData['tags'], $position->getTags());
        self::assertSame($positionRawData['position'], $position->getTitle());
        self::assertSame($positionRawData['url'], $position->getUrl());
    }

    public function testCreatePositionWithoutOptionalData(): void
    {
        $positionRawData = [
            'date' => '2021-03-17T18:15:05+00:00',
            'description' => 'A quick brown fox jumps over a lazy dog',
            'id' => '123',
            'slug' => 'lorem-ipsum',
            'position' => 'Senior Java Developer',
            'url' => 'https://remoteOK.io'
        ];
        $position = PositionFactory::createFromArray($positionRawData);

        self::assertInstanceOf(PositionInterface::class, $position);
        self::assertInstanceOf(CompanyInterface::class, $position->getCompany());
        self::assertNull($position->getCompany()->getName());
        self::assertNull($position->getCompany()->getLocation());
        self::assertNull($position->getCompany()->getLogoUrl());
        self::assertFalse($position->isOriginal());
        self::assertNull($position->getTags());
    }
}
