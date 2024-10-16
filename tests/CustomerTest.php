<?php

declare(strict_types=1);

namespace Tests\Digistorm\SchoolEasyPay;

use Carbon\Carbon;
use Digistorm\SchoolEasyPay\Card;
use Digistorm\SchoolEasyPay\Config;
use Digistorm\SchoolEasyPay\Customer;
use Digistorm\SchoolEasyPay\Enums\NotificationMethod;
use Digistorm\SchoolEasyPay\Enums\PaymentFrequency;
use Digistorm\SchoolEasyPay\Enums\PaymentOption;
use Digistorm\SchoolEasyPay\Exceptions\SchoolEasyPayException;

class CustomerTest extends \PHPUnit\Framework\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->config = new Config('test', 'test', 'test', true);
    }

    /**
     * Test that true does in fact equal true
     */
    public function testToJson()
    {
        $card = (new Card())
            ->setCardProxy('test-card-proxy')
        ;

        $customer = (new Customer($this->config))
            ->setCard($card)
            ->setCustomerReference('1234')
            ->setPaymentFrequency(PaymentFrequency::WEEKLY)
        ;

        $json = $customer->toJson();

        $this->assertEquals('{"customerReference":"1234","paymentFrequency":32,"card":{"cardProxy":"test-card-proxy"}}', $json);
    }

    public function testSetAndGetCustomerReference()
    {
        $customer = new Customer($this->config);
        $customerReference = 'REF12345';
        $customer->setCustomerReference($customerReference);

        $this->assertEquals($customerReference, $customer->getCustomerReference());
    }

    /**
     * @throws SchoolEasyPayException
     */
    public function testDateOfBirthHandling()
    {
        $customer = new Customer($this->config);
        $dateString = '2000-01-01';
        $customer->setDateOfBirth($dateString);

        $expected = Carbon::createFromFormat('Y-m-d', $dateString)->format('Y-m-d\T00:00:00.000\Z');
        $this->assertEquals($expected, $customer->getDateOfBirth());
    }

    /**
     * @throws SchoolEasyPayException
     */
    public function testPaymentStartDateHandling()
    {
        $customer = new Customer($this->config);
        $dateString = '2024-10-15';
        $customer->setPaymentStartDate($dateString);

        $expected = Carbon::createFromFormat('Y-m-d', $dateString)->format('Y-m-d\T00:00:00.000\Z');
        $this->assertEquals($expected, $customer->getPaymentStartDate());
    }

    /**
     * @throws SchoolEasyPayException
     */
    public function testPaymentEndDateHandling()
    {
        $customer = new Customer($this->config);
        $dateString = '2025-10-15';
        $customer->setPaymentEndDate($dateString);

        $expected = Carbon::createFromFormat('Y-m-d', $dateString)->format('Y-m-d\T00:00:00.000\Z');
        $this->assertEquals($expected, $customer->getPaymentEndDate());
    }

    public function testSetAndGetPaymentFrequency()
    {
        $customer = new Customer($this->config);
        $frequency = PaymentFrequency::WEEKLY; // Assuming PaymentFrequency is an enum

        $customer->setPaymentFrequency($frequency);
        $this->assertSame($frequency, $customer->getPaymentFrequency());
    }

    public function testSetAndGetPaymentOption()
    {
        $customer = new Customer($this->config);
        $option = PaymentOption::ONE_OFF; // Assuming PaymentOption is an enum

        $customer->setPaymentOption($option);
        $this->assertSame($option, $customer->getPaymentOption());
    }

    public function testSetAndGetNotificationMethod()
    {
        $customer = new Customer($this->config);
        $notificationMethod = NotificationMethod::EMAIL; // Assuming NotificationMethod is an enum

        $customer->setNotificationMethod($notificationMethod);
        $this->assertSame($notificationMethod, $customer->getNotificationMethod());
    }

    public function testExceptionOnInvalidDateOfBirth()
    {
        $this->expectException(SchoolEasyPayException::class);

        $customer = new Customer($this->config);
        $customer->setDateOfBirth('invalid-date');
    }
}