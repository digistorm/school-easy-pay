<?php

namespace Digistorm\SchoolEasyPay;

use Digistorm\SchoolEasyPay\Traits\JsonSerialize;

class Card implements \JsonSerializable
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
     * @param mixed $cardProxy
     * @return Card
     */
    public function setCardProxy($cardProxy)
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
     * @param mixed $label
     * @return Card
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    protected function jsonExclude(): array
    {
        return [];
    }
}