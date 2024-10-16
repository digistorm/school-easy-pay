<?php

namespace Digistorm\SchoolEasyPay;

use Digistorm\SchoolEasyPay\Enums\NotificationMethod;
use Digistorm\SchoolEasyPay\Enums\PaymentFrequency;
use Digistorm\SchoolEasyPay\Enums\PaymentOption;

/**
 * Class CustomerAccount
 *
 * @package Digistorm\SchoolEasyPay
 * @link https://api.schooleasypay.com.au/swagger/ui/index#/Customers/Customers_UpdateCustomerAccount
 */
class CustomerAccount extends Base
{
    const REQUIRED = [
        'customerReference',
        'creditCardProxy',
    ];

    protected string $customerReference;

    protected Card $creditCardProxy;

    public function getCustomerReference(): string
    {
        return $this->customerReference;
    }

    public function setCustomerReference(string $customerReference): self
    {
        $this->customerReference = $customerReference;

        return $this;
    }

    protected function getEndpoint(): string
    {
        return '/customers/' . $this->customerReference . '/account';
    }

    public function getCreditCardProxy(): Card
    {
        return $this->creditCardProxy;
    }

    public function setCreditCardProxy(Card $card): self
    {
        $this->creditCardProxy = $card;

        return $this;
    }
}
