<?php

namespace Digistorm\SchoolEasyPay;

class PaymentAccountProxy
{
    protected string $proxy;
    protected string $label;

    public function getProxy(): string
    {
        return $this->proxy;
    }

    public function setProxy(string $proxy): self
    {
        $this->proxy = $proxy;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(mixed $label): self
    {
        $this->label = $label;

        return $this;
    }
}