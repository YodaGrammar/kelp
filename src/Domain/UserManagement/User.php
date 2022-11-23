<?php

declare(strict_types=1);

namespace App\Domain\UserManagement;

use App\Domain\UserManagement\ValueObject\UserId;

class User
{
    public function __construct(
        private readonly UserId $id,
    ){

    }

    public function id(): UserId
    {
        return $this->id;
    }
}
