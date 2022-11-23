<?php

declare(strict_types=1);

namespace App\Infrastructure\Driving\Common\Dto\Place;

class PlaceWriteDto
{
    public function __construct(public readonly string $name)
    {

    }
}
