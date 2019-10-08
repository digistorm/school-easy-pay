<?php

namespace Digistorm\SchoolEasyPay\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static \Digistorm\SchoolEasyPay\Enums\NotificationMethod NONE()
 * @method static \Digistorm\SchoolEasyPay\Enums\NotificationMethod SMS()
 * @method static \Digistorm\SchoolEasyPay\Enums\NotificationMethod EMAIL()
 */
class NotificationMethod extends Enum
{
    private const NONE = 0;
    private const SMS = 1;
    private const EMAIL = 2;
}
