<?php

namespace Digistorm\SchoolEasyPay\Enums;

enum PaymentFrequency: int
{
    case WEEKLY = 32;
    case FORTNIGHTLY = 33;
    case MONTHLY = 34;
    case QUARTERLY = 35;
    case HALF_YEARLY = 36;
    case YEARLY = 37;
    case FOUR_WEEKS = 38;
}