<?php

namespace Digistorm\SchoolEasyPay;

use Carbon\Carbon;
use Digistorm\SchoolEasyPay\Exceptions\SchoolEasyPayException;
use Digistorm\SchoolEasyPay\Traits\HasCarbonDates;
use Digistorm\SchoolEasyPay\Traits\HasPaymentAmount;

/**
 * Class Customer
 *
 * @package Digistorm\SchoolEasyPay
 * @link https://api.schooleasypay.com.au/swagger/ui/index#/Customers
 */
class CardProxy extends Base
{
    use HasPaymentAmount;
    use HasCarbonDates;

    protected string $customerUniqueId;
    protected string $cardNumber;
    protected Carbon $expiry;
    protected string $cardHolderName;

    protected function getEndpoint(): string
    {
        return 'cardproxies';
    }

    /**
     * @return mixed
     */
    public function getCustomerUniqueId(): string
    {
        return $this->customerUniqueId;
    }

    public function setCustomerUniqueId(string $customerUniqueId): self
    {
        $this->customerUniqueId = $customerUniqueId;

        return $this;
    }

    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    public function setCardNumber(string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getExpiry(): string
    {
        return $this->castCarbonToString($this->expiry, 'm/y');
    }

    /**
     * @throws SchoolEasyPayException
     */
    public function setExpiry(string $expiry): self
    {
        $dateStringWithDay = '01/' . $expiry;
        $this->expiry = $this->castStringToCarbon($dateStringWithDay, 'd/m/y');
        return $this;
    }

    public function getCardHolderName(): string
    {
        return $this->cardHolderName;
    }

    public function setCardHolderName(string $cardHolderName): self
    {
        $this->cardHolderName = $cardHolderName;

        return $this;
    }
}