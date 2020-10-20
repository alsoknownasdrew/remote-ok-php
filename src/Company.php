<?php

declare(strict_types=1);

namespace Alsoknownasdrew\RemoteOK;

/**
 * Class Company
 * @package Alsoknownasdrew\RemoteOK
 */
class Company
{
    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $logoUrl;

    /**
     * @var string
     */
    private $name;

    /**
     * Company constructor.
     * @param string|null $location
     * @param string|null $logoUrl
     * @param string $name
     */
    public function __construct(string $name, ?string $location, ?string $logoUrl)
    {
        $this->name = $name;
        $this->location = $location;
        $this->logoUrl = $logoUrl;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return string
     */
    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
