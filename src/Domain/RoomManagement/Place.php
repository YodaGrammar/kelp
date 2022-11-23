<?php

declare(strict_types=1);

namespace App\RoomManagement;

use App\Domain\RoomManagement\ValueObject\PlaceId;
use App\Domain\RoomManagement\ValueObject\PlaceName;

class Place
{
    public function __construct(
        public readonly PlaceId $id,
        private PlaceName $name,

    ){

    }

    public function update(PlaceName $name, )
    {

    }
}
