<?php

namespace common\groups;

use common\entities\User;

final class UserItemGroup
{
    public static function toArray(User $user): array
    {
        return [
            'id' => $user->id,
            'username' => $user->username,
            'status' => $user->status,
            'created_at' => $user->created_at,
        ];
    }
}
