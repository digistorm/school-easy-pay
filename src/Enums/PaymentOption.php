<?php

namespace Digistorm\SchoolEasyPay\Enums;

enum PaymentOption: int
{
    case AUTO_PAY = 22;
    case EMAIL_REMINDER = 23;
    case SMS_REMINDER = 24;
    case FIXED_TERM = 25;
    case BATCH_PAY = 26;
    case SCHEDULED_PAY = 27;
    case ONE_OFF = 28;
}
