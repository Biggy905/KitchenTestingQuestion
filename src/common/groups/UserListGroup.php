<?php

namespace common\groups;

use common\entities\User;

final class UserListGroup
{
    public static function toArray(array $users): array
    {
        $data = [];
        foreach ($users as $user) {
            $data[] = UserItemGroup::toArray($user);
        }

        return $data;
    }
}
