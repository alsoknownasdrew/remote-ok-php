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
     * @var string|null
     */
    private $location;

    /**
     * @var string|null
     */
    private $logoUrl;

    /**
     * @var string|null
     */
    private $name;

    /**
     * Company constructor.
     * @param string|null $location
     * @param string|null $logoUrl
     * @param string|null $name
     */
    public function __construct(?string $name, ?string $location, ?string $logoUrl)
    {
        $this->name = $name;
        $this->location = $location;
        $this->logoUrl = $logoUrl;
    }

    /**
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->location;
    }

    /**
     * @return string|null
     */
    public function getLogoUrl(): ?string
    {
        return $this->logoUrl;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
}
