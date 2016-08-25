<?php

namespace core\lang;


class Math extends Object
{

    private function __construct() {}

    const E = M_E;

    const PI = M_PI;

    public static function sin(float $a): float
    {
        return sin($a);
    }

    public static function cos(float $a): float
    {
        return cos($a);
    }

    public static function tan(float $a): float
    {
        return tan($a);
    }

    public static function asin(float $a): float
    {
        return asin($a);
    }

    public static function acos(float $a): float
    {
        return acos($a);
    }

    public static function atan(float $a): float
    {
        return atan($a);
    }

    public static function toRadians(float $angdeg): float
    {
        return deg2rad($angdeg);
    }

    public static function toDegrees(float $angrad): float
    {
        return rad2deg($angrad);
    }

    public static function exp(float $a): float
    {
        return exp($a);
    }

    public static function log(float $a): float
    {
        return log($a);
    }

    public static function log10(float $a): float
    {
        return log10($a);
    }

    public static function sqrt(float $a): float
    {
        return sqrt($a);
    }

    public static function cbrt(float $a): float
    {
        return pow($a, 1/3);
    }

    //IEEEremainder

    public static function ceil(float $a): float
    {
        return ceil($a);
    }

    public static function floor(float $a): float
    {
        return floor($a);
    }

    //rint

    //atan2

    public static function pow(float $a, float $b): float
    {
        return pow($a, $b);
    }

    public static function round(float $a): int
    {
        return (int) round($a);
    }

    public static function random(): float
    {
        return mt_rand(0, mt_getrandmax() - 1) / mt_getrandmax();
    }

    public static function abs($a)
    {
        return abs($a);
    }

    public static function max($a, $b)
    {
        return max($a, $b);
    }

    public static function min($a, $b)
    {
        return min($a, $b);
    }

    //ulp

    public static function signum(float $a): float
    {
        return (float) (($a > 0) - ($a < 0));
    }

    public static function sinh(float $a): float
    {
        return sinh($a);
    }

    public static function cosh(float $a): float
    {
        return cosh($a);
    }

    public static function tanh(float $a): float
    {
        return tanh($a);
    }

    public static function hypot(float $a, float $b): float
    {
        return hypot($a, $b);
    }

    public static function expm1(float $a): float
    {
        return expm1($a);
    }

    public static function log1p(float $a): float
    {
        return log1p($a);
    }

    //copySign

    //getExponent

    //nextAfter

    //nextUp

    //scalb

}