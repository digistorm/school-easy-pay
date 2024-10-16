<?php

namespace Digistorm\SchoolEasyPay;

use Carbon\Carbon;
use Digistorm\SchoolEasyPay\Enums\NotificationMethod;
use Digistorm\SchoolEasyPay\Enums\PaymentFrequency;
use Digistorm\SchoolEasyPay\Enums\PaymentOption;
use Digistorm\SchoolEasyPay\Exceptions\SchoolEasyPayException;
use Digistorm\SchoolEasyPay\Traits\HasCarbonDates;
use Digistorm\SchoolEasyPay\Traits\HasPaymentAmount;

/**
 * Class CustomerPaymentOption
 *
 * @package Digistorm\SchoolEasyPay
 * @link https://api.schooleasypay.com.au/swagger/ui/index#/Customers/Customers_UpdateCustomerPaymentOption
 */
class CustomerPaymentOption extends Base
{
    use HasPaymentAmount;
    use HasCarbonDates;

    const REQUIRED = [
        'customerReference',
        'paymentOption',
        'paymentAmount',
        'paymentFrequency',
        'nextPaymentDate',
        'paymentEndDate',
        'notificationMethod',
    ];

    protected string $customerReference;

    protected PaymentOption $paymentOption;

    protected PaymentFrequency $paymentFrequency;

    protected Carbon $nextPaymentDate;

    protected Carbon $paymentEndDate;

    protected NotificationMethod $notificationMethod;

    protected function getEndpoint(): string
    {
        return '/customers/' . $this->customerReference . '/paymentOption';
    }

    public function getCustomerReference(): string
    {
        return $this->customerReference;
    }

    public function setCustomerReference(string $customerReference): self
    {
        $this->customerReference = $customerReference;

        return $this;
    }

    public function getPaymentFrequency(): PaymentFrequency
    {
        return $this->paymentFrequency;
    }

    public function setPaymentFrequency(PaymentFrequency $paymentFrequency): self
    {
        $this->paymentFrequency = $paymentFrequency;

        return $this;
    }

    public function getPaymentOption(): PaymentOption
    {
        return $this->paymentOption;
    }

    public function setPaymentOption(PaymentOption $paymentOption): self
    {
        $this->paymentOption = $paymentOption;

        return $this;
    }

    public function getNextPaymentDate(): string
    {
        return $this->castCarbonToString($this->nextPaymentDate);
    }

    /**
     * @throws SchoolEasyPayException
     */
    public function setNextPaymentDate(string $nextPaymentDate): self
    {
        $this->nextPaymentDate = $this->castStringToCarbon($nextPaymentDate);

        return $this;
    }

    public function getPaymentEndDate(): string
    {
        return $this->castCarbonToString($this->paymentEndDate);
    }

    /**
     * @throws SchoolEasyPayException
     */
    public function setPaymentEndDate(string $paymentEndDate): self
    {
        $this->paymentEndDate = $this->castStringToCarbon($paymentEndDate);

        return $this;
    }

    public function getNotificationMethod(): NotificationMethod
    {
        return $this->notificationMethod;
    }

    public function setNotificationMethod(NotificationMethod $notificationMethod): self
    {
        $this->notificationMethod = $notificationMethod;

        return $this;
    }
}
