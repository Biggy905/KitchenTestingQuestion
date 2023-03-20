<?php

namespace common\enums;

enum UserStatus: string
{
    case NEW = 'new';
    case ACTIVE = 'active';
    case PAUSED = 'paused';
}
