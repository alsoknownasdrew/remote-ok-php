<?php

namespace Alsoknownasdrew\RemoteOK\Position\Factory;


use Alsoknownasdrew\RemoteOK\Position\Position;
use Alsoknownasdrew\RemoteOK\Position\PositionInterface;

/**
 * Class PositionFactory
 *
 * @package Alsoknownasdrew\RemoteOK
 */
interface PositionFactoryInterface
{
    /** @var string */
    public const DATE = 'date';

    /** @var string */
    public const COMPANY = 'company';

    /** @var string */
    public const LOCATION = 'location';

    /** @var string */
    public const COMPANY_LOGO = 'company_logo';

    /** @var string */
    public const DESCRIPTION = 'description';

    /** @var string */
    public const ID = 'id';

    /** @var string */
    public const ORIGINAL = 'original';

    /** @var string */
    public const SLUG = 'slug';

    /** @var string */
    public const TAGS = 'tags';

    /** @var string */
    public const POSITION = 'position';

    /** @var string */
    public const URL = 'url';

    /**
     * @param array $positionData
     *
     * @return PositionInterface
     */
    public static function createFromArray(array $positionData): PositionInterface;
}
