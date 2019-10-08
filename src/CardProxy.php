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
     * @param mixed $customerUniqueId
     * @return CardProxy
     */
    public function setCustomerUniqueId($customerUniqueId)
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
     * @param mixed $cardNumber
     * @return CardProxy
     */
    public function setCardNumber($cardNumber)
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
     * @param mixed $expiry
     * @return CardProxy
     */
    public function setExpiry($expiry)
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
     * @param mixed $cardHolderName
     * @return CardProxy
     */
    public function setCardHolderName($cardHolderName)
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
     * @param mixed $paymentAmount
     * @return CardProxy
     */
    public function setPaymentAmount($paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;

        return $this;
    }
}