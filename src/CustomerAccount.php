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

    protected $customerReference;

    protected $creditCardProxy;

    /**
     * @return mixed
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @param mixed $customerReference
     * @return CustomerAccount
     */
    public function setCustomerReference(string $customerReference): CustomerAccount
    {
        $this->customerReference = $customerReference;

        return $this;
    }

    protected function getEndpoint()
    {
        return '/customers/' . $this->customerReference . '/account';
    }

    /**
     * @return \Digistorm\SchoolEasyPay\Card
     */
    public function getCreditCardProxy(): \Digistorm\SchoolEasyPay\Card
    {
        return $this->creditCardProxy;
    }

    /**
     * @param \Digistorm\SchoolEasyPay\Card $card
     * @return CustomerAccount
     */
    public function setCreditCardProxy(\Digistorm\SchoolEasyPay\Card $card): CustomerAccount
    {
        $this->creditCardProxy = $card;

        return $this;
    }
}
