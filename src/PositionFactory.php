<?php

declare(strict_types=1);

namespace Alsoknownasdrew\RemoteOK;

/**
 * Class PositionFactory
 * @package Alsoknownasdrew\RemoteOK
 */
class PositionFactory
{
    /**
     * @param array $positionData
     * @return Position
     */
    public static function createFromArray(array $positionData): Position
    {
        return new Position(
            new Company(
                $positionData['company'],
                $positionData['location'] ?: null,
                $positionData['company_logo'] ?: null
            ),
            \DateTime::createFromFormat(DATE_ATOM, $positionData['date']),
            $positionData['description'],
            $positionData['id'],
            $positionData['origin'] ?? false,
            $positionData['slug'],
            $positionData['tags'] ?? [],
            $positionData['position'],
            $positionData['url']
        );
    }
}
