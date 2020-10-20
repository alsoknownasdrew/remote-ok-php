<?php

declare(strict_types=1);

namespace Alsoknownasdrew\RemoteOK;

use DateTimeInterface;

/**
 * Class Position
 * @package Alsoknownasdrew\RemoteOK
 */
class Position
{
    /**
     * @var Company
     */
    private $company;

    /**
     * @var DateTimeInterface
     */
    private $createdAt;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $id;

    /**
     * @var bool
     */
    private $original;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string[]
     */
    private $tags;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $url;

    /**
     * Position constructor.
     * @param Company $company
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
        Company $company,
        DateTimeInterface $createdAt,
        string $description,
        string $id,
        bool $original,
        string $slug,
        ?array $tags,
        string $title,
        string $url
    )
    {
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
     * @return Company
     */
    public function getCompany(): Company
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
     * @return string[]
     */
    public function getTags(): array
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
