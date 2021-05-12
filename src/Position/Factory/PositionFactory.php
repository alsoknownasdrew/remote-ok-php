<?php

declare(strict_types=1);

namespace Alsoknownasdrew\RemoteOK\Position\Factory;

use Alsoknownasdrew\RemoteOK\Company\Company;
use Alsoknownasdrew\RemoteOK\Position\Position;
use Alsoknownasdrew\RemoteOK\Position\PositionInterface;

/**
 * Class PositionFactory
 *
 * @package Alsoknownasdrew\RemoteOK
 */
class PositionFactory implements PositionFactoryInterface
{
    /**
     * @param array $positionData
     *
     * @return PositionInterface
     */
    public static function createFromArray(array $positionData): PositionInterface
    {
        $createdAt = \DateTime::createFromFormat(DATE_ATOM, $positionData[self::DATE]);
        \assert($createdAt instanceof \DateTimeInterface);

        return new Position(
            new Company(
                $positionData[self::COMPANY] ?? null,
                $positionData[self::LOCATION] ?? null,
                $positionData[self::COMPANY_LOGO] ?? null
            ),
            $createdAt,
            $positionData[self::DESCRIPTION],
            $positionData[self::ID],
            $positionData[self::ORIGINAL] ?? false,
            $positionData[self::SLUG],
            $positionData[self::TAGS] ?? null,
            $positionData[self::POSITION],
            $positionData[self::URL]
        );
    }
}
