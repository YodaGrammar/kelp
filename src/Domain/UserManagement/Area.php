<?php

declare(strict_types=1);

namespace App\Domain\UserManagement;

use App\Domain\RoomManagement\ValueObject\PlaceId;
use App\Domain\RoomManagement\ValueObject\PlaceName;

class Area
{
    public function __construct(
        private readonly PlaceId $id,
        private PlaceName $name,
    ){

    }

    public function id(): PlaceId
    {
        return $this->id;
    }

    public function name(): PlaceName
    {
        return $this->name;
    }
}
