<?php

namespace common\enums;

enum BookStatus: string
{
    case NEW = 'new';
    case ACTIVE = 'active';
    case PAUSED = 'paused';
}
