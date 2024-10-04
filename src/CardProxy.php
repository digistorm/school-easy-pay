<?php

namespace Digistorm\SchoolEasyPay;

/**
 * Class Customer
 *
 * @package Digistorm\SchoolEasyPay
 * @link https://api.schooleasypay.com.au/swagger/ui/index#/Customers
 */
class CardProxy extends Base
{
    protected $customerUniqueId;
    protected $cardNumber;
    protected $expiry;
    protected $cardHolderName;
    protected $paymentAmount;

    protected function getEndpoint()
    {
        return 'cardproxies';
    }

    /**
     * @return mixed
     */
    public function getCustomerUniqueId()
    {
        return $this->customerUniqueId;
    }

    /**
     * @return CardProxy
     */
    public function setCustomerUniqueId(mixed $customerUniqueId)
    {
        $this->customerUniqueId = $customerUniqueId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @return CardProxy
     */
    public function setCardNumber(mixed $cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * @return CardProxy
     */
    public function setExpiry(mixed $expiry)
    {
        $this->expiry = $expiry;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardHolderName()
    {
        return $this->cardHolderName;
    }

    /**
     * @return CardProxy
     */
    public function setCardHolderName(mixed $cardHolderName)
    {
        $this->cardHolderName = $cardHolderName;

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
     * @return CardProxy
     */
    public function setPaymentAmount(mixed $paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;

        return $this;
    }
}