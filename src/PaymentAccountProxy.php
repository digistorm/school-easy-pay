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
     * @param mixed $proxy
     * @return PaymentAccountProxy
     */
    public function setProxy($proxy)
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
     * @param mixed $label
     * @return PaymentAccountProxy
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }
}