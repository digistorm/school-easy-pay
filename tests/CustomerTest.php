<?php

declare(strict_types=1);

namespace Tests\Digistorm\SchoolEasyPay;

use Digistorm\SchoolEasyPay\Config;
use Digistorm\SchoolEasyPay\Customer;
use Digistorm\SchoolEasyPay\Enums\PaymentFrequency;

class CustomerTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testToJson()
    {
        $config = new Config('test', 'test', 'test', true);

        $customer = (new Customer($config))
            ->setCustomerReference('1234')
            ->setPaymentFrequency(PaymentFrequency::WEEKLY())
        ;

        $json = $customer->toJson();

        $this->assertEquals('{"customerReference":"1234"}', $json);
    }
}