<?php

class Speedometer
{
    public const CONSTANT_CONVERSION = 6.21 / 10;

    public static function convertKmToMiles(float $length): float
    {
        return $length * self::CONSTANT_CONVERSION;
    }

    public static function convertMilesToKm(float $length): float
    {
        return $length / self::CONSTANT_CONVERSION;
    }
}