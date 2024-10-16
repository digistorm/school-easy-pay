<?php

namespace Digistorm\SchoolEasyPay\Traits;

use Exception;
use Carbon\Carbon;
use Digistorm\SchoolEasyPay\Exceptions\SchoolEasyPayException;

trait HasCarbonDates
{
    private function castCarbonToString(Carbon $date, string $outputFormat = 'Y-m-d\TH:i:s.v\Z'): string
    {
        return $date->format($outputFormat);
    }

    /**
     * @throws SchoolEasyPayException
     */
    private function castStringToCarbon(string $dateString, ?string $inputFormat = null): Carbon
    {
        try {
            return ($inputFormat) ? Carbon::createFromFormat($inputFormat, $dateString) : new Carbon($dateString);
        } catch (Exception $e) {
            throw new SchoolEasyPayException('Invalid date format: ' . $e->getMessage());
        }
    }
}