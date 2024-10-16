<?php

namespace Digistorm\SchoolEasyPay\Traits;

use Digistorm\SchoolEasyPay\Exceptions\SchoolEasyPayException;

trait HasPaymentAmount
{
    protected float $paymentAmount;

    public function getPaymentAmount(): float
    {
        return $this->paymentAmount;
    }

    /**
     * @throws SchoolEasyPayException
     */
    public function setPaymentAmount(mixed $paymentAmount): self
    {
        // Check if the value is numeric
        if (is_numeric($paymentAmount)) {
            // Cast to float
            $floatPaymentAmount = (float) $paymentAmount;

            // Ensure the cast value is numerically equivalent to the original
            if (
                // Decimal strings
                (string)$floatPaymentAmount === (string)$paymentAmount ||
                // Integer strings
                (string)(int)$paymentAmount === (string)$paymentAmount
            ) {
                if ($floatPaymentAmount < 0) {
                    throw new SchoolEasyPayException('Payment amount cannot be negative.');
                }
                $this->paymentAmount = $floatPaymentAmount;
                return $this;
            }
        }

        throw new SchoolEasyPayException('Invalid payment amount value.');
    }
}