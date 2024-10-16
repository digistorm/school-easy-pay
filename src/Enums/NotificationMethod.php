<?php

namespace Digistorm\SchoolEasyPay\Enums;

enum NotificationMethod: int
{
    case NONE = 0;
    case SMS = 1;
    case EMAIL = 2;
}