<?php

use Digistorm\SchoolEasyPay\Config;
use PHPUnit\Framework\TestCase;
use Digistorm\SchoolEasyPay\CardProxy;
use Digistorm\SchoolEasyPay\Exceptions\SchoolEasyPayException;
use Carbon\Carbon;

class CardProxyTest extends TestCase
{
    protected CardProxy $cardProxy;

    protected function setUp(): void
    {
        $config = new Config('test', 'test', 'test', true);
        $this->cardProxy = new CardProxy($config);
    }

    public function testSetAndGetCustomerUniqueId()
    {
        $customerUniqueId = 'CUST12345';
        $this->cardProxy->setCustomerUniqueId($customerUniqueId);

        $this->assertEquals($customerUniqueId, $this->cardProxy->getCustomerUniqueId());
    }

    public function testSetAndGetCardNumber()
    {
        $cardNumber = '4111111111111111';
        $this->cardProxy->setCardNumber($cardNumber);

        $this->assertEquals($cardNumber, $this->cardProxy->getCardNumber());
    }

    public function testSetAndGetCardHolderName()
    {
        $cardHolderName = 'John Doe';
        $this->cardProxy->setCardHolderName($cardHolderName);

        $this->assertEquals($cardHolderName, $this->cardProxy->getCardHolderName());
    }

    public function testSetAndGetExpiry()
    {
        $expiryString = '12/28';
        $this->cardProxy->setExpiry($expiryString);

        $this->assertEquals($expiryString, $this->cardProxy->getExpiry());
    }

    public function testExceptionOnInvalidExpiry()
    {
        $this->expectException(SchoolEasyPayException::class);

        $invalidExpiry = 'invalid-date';
        $this->cardProxy->setExpiry($invalidExpiry);
    }
}
