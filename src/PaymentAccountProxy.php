<?php

namespace Digistorm\SchoolEasyPay;

class PaymentAccountProxy
{
    protected $proxy;
    protected $label;

    /**
     * @return mixed
     */
    public function getProxy()
    {
        return $this->proxy;
    }

    /**
     * @return PaymentAccountProxy
     */
    public function setProxy(mixed $proxy)
    {
        $this->proxy = $proxy;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return PaymentAccountProxy
     */
    public function setLabel(mixed $label)
    {
        $this->label = $label;

        return $this;
    }
}