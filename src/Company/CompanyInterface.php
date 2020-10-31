<?php

namespace Alsoknownasdrew\RemoteOK\Company;


/**
 * Class Company
 *
 * @package Alsoknownasdrew\RemoteOK
 */
interface CompanyInterface
{
    /**
     * @return string|null
     */
    public function getLocation(): ?string;

    /**
     * @return string|null
     */
    public function getLogoUrl(): ?string;

    /**
     * @return string|null
     */
    public function getName(): ?string;
}
