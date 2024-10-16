<?php

namespace Digistorm\SchoolEasyPay;

use JsonSerializable;
use Digistorm\SchoolEasyPay\Traits\JsonSerialize;

class Card implements JsonSerializable
{
    use JsonSerialize;

    protected string $cardProxy;
    protected string $label;

    public function getCardProxy(): string
    {
        return $this->cardProxy;
    }

    public function setCardProxy(string $cardProxy): self
    {
        $this->cardProxy = $cardProxy;

        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    protected function jsonExclude(): array
    {
        return [];
    }
}