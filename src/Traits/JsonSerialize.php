<?php

namespace Digistorm\SchoolEasyPay\Traits;

use JsonSerializable;

trait JsonSerialize
{
    /**
     * An array of object property names that shouldn't be serialized.
     *
     * @return array
     */
    abstract protected function jsonExclude(): array;

    public function toJson()
    {
        return json_encode($this);
    }

    /**
     * Serialize all object properties that aren't specified in the jsonExclude array on the model.
     *
     * @return array
     */
    public function jsonSerialize(): mixed
    {
        return array_filter(get_object_vars($this), function ($value, $key) {
            if (is_object($value) && isset(class_implements($value)[JsonSerializable::class])) {
                $value = json_encode($value);
            }
            return !in_array($key, $this->jsonExclude()) && $value !== null;
        }, ARRAY_FILTER_USE_BOTH);
    }
}