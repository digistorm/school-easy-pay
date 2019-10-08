<?php

namespace Digistorm\SchoolEasyPay\Enums;

use MyCLabs\Enum\Enum;

/**
 * @method static \Digistorm\SchoolEasyPay\Enums\PaymentFrequency WEEKLY()
 * @method static \Digistorm\SchoolEasyPay\Enums\PaymentFrequency FORTNIGHTLY()
 * @method static \Digistorm\SchoolEasyPay\Enums\PaymentFrequency MONTHLY()
 * @method static \Digistorm\SchoolEasyPay\Enums\PaymentFrequency QUARTERLY()
 * @method static \Digistorm\SchoolEasyPay\Enums\PaymentFrequency HALF_YEARLY()
 * @method static \Digistorm\SchoolEasyPay\Enums\PaymentFrequency YEARLY()
 * @method static \Digistorm\SchoolEasyPay\Enums\PaymentFrequency FOUR_WEEKS()
 */
class PaymentFrequency extends Enum
{
    private const WEEKLY = 32;
    private const FORTNIGHTLY = 33;
    private const MONTHLY = 34;
    private const QUARTERLY = 35;
    private const HALF_YEARLY = 36;
    private const YEARLY = 37;
    private const FOUR_WEEKS = 38;
}