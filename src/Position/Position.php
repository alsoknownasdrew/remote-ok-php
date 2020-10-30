<?php

declare(strict_types=1);

namespace Alsoknownasdrew\RemoteOK\Position;

use Alsoknownasdrew\RemoteOK\Company\Company;
use Alsoknownasdrew\RemoteOK\Company\CompanyInterface;
use DateTimeInterface;

/**
 * Class Position
 *
 * @package Alsoknownasdrew\RemoteOK
 */
class Position implements PositionInterface
{
    /** @var CompanyInterface */
    private $company;

    /** @var DateTimeInterface */
    private $createdAt;

    /** @var string */
    private $description;

    /** @var string */
    private $id;

    /** @var bool */
    private $original;

    /** @var string */
    private $slug;

    /** @var string[]|null */
    private $tags;

    /** @var string */
    private $title;

    /** @var string */
    private $url;

    /**
     * Position constructor.
     *
     * @param CompanyInterface $company
     * @param DateTimeInterface $createdAt
     * @param string $description
     * @param string $id
     * @param bool $original
     * @param string $slug
     * @param array|null $tags
     * @param string $title
     * @param string $url
     */
    public function __construct(
        CompanyInterface $company,
        DateTimeInterface $createdAt,
        string $description,
        string $id,
        bool $original,
        string $slug,
        ?array $tags,
        string $title,
        string $url
    ) {
        $this->company = $company;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->id = $id;
        $this->original = $original;
        $this->slug = $slug;
        $this->tags = $tags;
        $this->title = $title;
        $this->url = $url;
    }

    /**
     * @return CompanyInterface
     */
    public function getCompany(): CompanyInterface
    {
        return $this->company;
    }

    /**
     * @return DateTimeInterface
     */
    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isOriginal(): bool
    {
        return $this->original;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
}
