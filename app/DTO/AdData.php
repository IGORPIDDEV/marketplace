<?php

namespace App\DTO\Ad;

class AdData
{
    public function __construct(
        public string $title,
        public ?string $description,
        public float $price,
        public ?string $location,
        public int $categoryId,
        public array $attributes,
        public string $locale,
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            $data['title'],
            $data['description'] ?? null,
            $data['price'],
            $data['location'] ?? null,
            $data['category_id'],
            $data['attributes'] ?? [],
            $data['locale'] ?? app()->getLocale(),
        );
    }
}
