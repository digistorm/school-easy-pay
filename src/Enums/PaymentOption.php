<?php

namespace Digistorm\SchoolEasyPay\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static \Digistorm\SchoolEasyPay\Enums\PaymentOption AUTO_PAY()
 * @method static \Digistorm\SchoolEasyPay\Enums\PaymentOption EMAIL_REMINDER()
 * @method static \Digistorm\SchoolEasyPay\Enums\PaymentOption SMS_REMINDER()
 * @method static \Digistorm\SchoolEasyPay\Enums\PaymentOption FIXED_TERM()
 * @method static \Digistorm\SchoolEasyPay\Enums\PaymentOption BATCH_PAY()
 * @method static \Digistorm\SchoolEasyPay\Enums\PaymentOption SCHEDULED_PAY()
 * @method static \Digistorm\SchoolEasyPay\Enums\PaymentOption ONE_OFF()
 */
class PaymentOption extends Enum
{
    private const AUTO_PAY = 22;
    private const EMAIL_REMINDER = 23;
    private const SMS_REMINDER = 24;
    private const FIXED_TERM = 25;
    private const BATCH_PAY = 26;
    private const SCHEDULED_PAY = 27;
    private const ONE_OFF = 28;
}
