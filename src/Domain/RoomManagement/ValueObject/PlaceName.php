<?php

declare(strict_types=1);

namespace App\Domain\RoomManagement\ValueObject;

class PlaceName
{
    public function __construct(public readonly string $name)
    {
    }
}
