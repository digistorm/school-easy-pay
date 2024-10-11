<?php

namespace Digistorm\SchoolEasyPay;

use JsonSerializable;
use Digistorm\SchoolEasyPay\Traits\JsonSerialize;

class Card implements JsonSerializable
{
    use JsonSerialize;

    protected $cardProxy;
    protected $label;

    /**
     * @return mixed
     */
    public function getCardProxy()
    {
        return $this->cardProxy;
    }

    /**
     * @return Card
     */
    public function setCardProxy(mixed $cardProxy)
    {
        $this->cardProxy = $cardProxy;

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
     * @return Card
     */
    public function setLabel(mixed $label)
    {
        $this->label = $label;

        return $this;
    }

    protected function jsonExclude(): array
    {
        return [];
    }
}