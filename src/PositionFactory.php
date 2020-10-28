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
        $createdAt = \DateTime::createFromFormat(DATE_ATOM, $positionData['date']);
        \assert($createdAt instanceof \DateTimeInterface);

        return new Position(
            new Company(
                $positionData['company'] ?: null,
                $positionData['location'] ?: null,
                $positionData['company_logo'] ?: null
            ),
            $createdAt,
            $positionData['description'],
            $positionData['id'],
            $positionData['original'] ?? false,
            $positionData['slug'],
            $positionData['tags'] ?: null,
            $positionData['position'],
            $positionData['url']
        );
    }
}
