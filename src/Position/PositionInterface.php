<?php

namespace Alsoknownasdrew\RemoteOK\Position;


use Alsoknownasdrew\RemoteOK\Company\Company;
use Alsoknownasdrew\RemoteOK\Company\CompanyInterface;
use DateTimeInterface;

/**
 * Class Position
 *
 * @package Alsoknownasdrew\RemoteOK
 */
interface PositionInterface
{
    /**
     * @return CompanyInterface
     */
    public function getCompany(): CompanyInterface;

    /**
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface;

    /**
     * @return string
     */
    public function getDescription(): string;

    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return bool
     */
    public function isOriginal(): bool;

    /**
     * @return string
     */
    public function getSlug(): string;

    /**
     * @return string[]|null
     */
    public function getTags(): ?array;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @return string
     */
    public function getUrl(): string;
}
