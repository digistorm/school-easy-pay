<?php

declare(strict_types=1);

namespace Tests\Digistorm\SchoolEasyPay;

use Digistorm\SchoolEasyPay\Card;
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

        $card = (new Card())
            ->setCardProxy('test-card-proxy')
        ;

        $customer = (new Customer($config))
            ->setCard($card)
            ->setCustomerReference('1234')
            ->setPaymentFrequency(PaymentFrequency::WEEKLY())
        ;

        $json = $customer->toJson();

        $this->assertEquals('{"customerReference":"1234","paymentFrequency":32,"card":{"cardProxy":"test-card-proxy"}}', $json);
    }
}