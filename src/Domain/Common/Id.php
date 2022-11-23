<?php

declare(strict_types=1);

namespace App\Domain\Common;

use Symfony\Component\Uid\UuidV6;

abstract class Id
{

    private function __construct(protected UuidV6 $id)
    {
    }

    public function __toString(): string
    {
        return $this->id->toRfc4122();
    }

    public static function fromString(string $id): static
    {
        return new static(UuidV6::fromString($id));
    }

    public function equalTo(self $id): bool
    {
        return (string)$this === (string)$id && static::class === \get_class($id);
    }

    public static function isValid(string $value): bool
    {
        return UuidV6::isValid($value);
    }
}
