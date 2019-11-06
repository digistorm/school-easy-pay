<?php

namespace Digistorm\SchoolEasyPay;

use Digistorm\SchoolEasyPay\Enums\NotificationMethod;
use Digistorm\SchoolEasyPay\Enums\PaymentFrequency;
use Digistorm\SchoolEasyPay\Enums\PaymentOption as PaymentOption;

/**
 * Class CustomerPaymentOption
 *
 * @package Digistorm\SchoolEasyPay
 * @link https://api.schooleasypay.com.au/swagger/ui/index#/Customers/Customers_UpdateCustomerPaymentOption
 */
class CustomerPaymentOption extends Base
{
    const REQUIRED = [
        'customerReference',
        'paymentOption',
        'paymentAmount',
        'paymentFrequency',
        'nextPaymentDate',
        'paymentEndDate',
        'notificationMethod',
    ];

    protected $customerReference;

    /** @var PaymentOption $paymentOption */
    protected $paymentOption;

    protected $paymentAmount;
    /** @var PaymentFrequency $paymentFrequency */
    protected $paymentFrequency;

    protected $nextPaymentDate;

    protected $paymentEndDate;

    /** @var \Digistorm\SchoolEasyPay\Enums\NotificationMethod $notificationMethod */
    protected $notificationMethod;

    protected function getEndpoint()
    {
        return '/customers/' . $this->customerReference . '/paymentOption';
    }

    /**
     * @return mixed
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * @param mixed $customerReference
     * @return CustomerPaymentOption
     */
    public function setCustomerReference(string $customerReference)
    {
        $this->customerReference = $customerReference;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentFrequency()
    {
        return $this->paymentFrequency;
    }

    /**
     * @param mixed $paymentFrequency
     * @return CustomerPaymentOption
     */
    public function setPaymentFrequency(PaymentFrequency $paymentFrequency)
    {
        $this->paymentFrequency = $paymentFrequency;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentOption()
    {
        return $this->paymentOption;
    }

    /**
     * @param mixed $paymentOption
     * @return CustomerPaymentOption
     */
    public function setPaymentOption(PaymentOption $paymentOption)
    {
        $this->paymentOption = $paymentOption;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * @param mixed $paymentAmount
     * @return CustomerPaymentOption
     */
    public function setPaymentAmount($paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNextPaymentDate()
    {
        return $this->nextPaymentDate;
    }

    /**
     * @param mixed $nextPaymentDate
     * @return CustomerPaymentOption
     */
    public function setNextPaymentDate($nextPaymentDate)
    {
        $this->nextPaymentDate = $nextPaymentDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentEndDate()
    {
        return $this->paymentEndDate;
    }

    /**
     * @param mixed $paymentEndDate
     * @return CustomerPaymentOption
     */
    public function setPaymentEndDate($paymentEndDate)
    {
        $this->paymentEndDate = $paymentEndDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNotificationMethod()
    {
        return $this->notificationMethod;
    }

    /**
     * @param mixed $notificationMethod
     * @return CustomerPaymentOption
     */
    public function setNotificationMethod(NotificationMethod $notificationMethod)
    {
        $this->notificationMethod = $notificationMethod;

        return $this;
    }
}
