<?php

declare(strict_types=1);

namespace App\Application\Command\Place;

use App\Domain\RoomManagement\ValueObject\PlaceId;
use App\Domain\RoomManagement\ValueObject\PlaceName;
use App\Domain\UserManagement\ValueObject\UserId;

final class CreatePlaceCommand
{
    public function __construct(
        public readonly PlaceId $placeId,
        public readonly PlaceName $name,
        public readonly UserId $userId
    ){

    }
}
