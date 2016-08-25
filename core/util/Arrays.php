<?php

namespace core\util;


use core\lang\Object;
use core\exceptions\ArrayIndexOutOfBoundsException;
use core\exceptions\IllegalArgumentException;

class Arrays extends Object
{

    private function __construct() {}

    public static function fill(array &$a, $fromIndexOrValue, $toIndex = null, $value = null)
    {
        if (is_null($toIndex)) {
            $value = $fromIndexOrValue;
            $fromIndexOrValue = 0;
            $toIndex = count($a) - 1;
        }
        self::rangeCheck(count($a), $fromIndexOrValue, $toIndex);
        for ($i = $fromIndexOrValue; $i < $toIndex; $i++) {
            $a[$i] = $value;
        }
    }

    /*public static function arrayEquals(array $a, array $b): bool
    {
        if (is_null($a) || is_null($b)) {
            return false;
        }
        if ()
    }*/

    public static function copyOf(array $original, $newLength = null): array
    {
        if (is_null($newLength)) {
            $newLength = count($original);
        }
        $newLength = min($newLength, count($original));
        $ret = [];
        for ($i = 0; $i < $newLength; $i++) {
            $ret[$i] = $original[$i];
        }
        return $ret;
    }

    public static function copyOfRange(array $original, int $from, int $to): array
    {
        $newLength = $to - $from;
        if ($newLength < 0) {
            throw new IllegalArgumentException("" . $from . " > " + $to);
        }
        //$newLength = min($newLength, count($original) - $from);
        $ret = [];
        for ($i = $from; $i < $to; $i++) {
            $ret[] = $original[$i];
        }
        return $ret;
    }

    public static function swap(array &$arr, int $a, int $b)
    {
        $t = $arr[$a];
        $arr[$a] = $arr[$b];
        $arr[$b] = $t;
    }

    public static function vecswap(array &$arr, int $a, int $b, int $n)
    {
        for ($i = 0; $i < $n; $i++, $a++, $b++) {
            self::swap($arr, $a, $b);
        }
    }

    public static function toString(array $a): string
    {
        if (is_null($a)) {
            return "null";
        }
        return "[" . implode(", ", $a) . "]";
    }

    private static function rangeCheck(int $arrayLength, int $fromIndex, int $toIndex)
    {
        if ($fromIndex > $toIndex) {
            throw new IllegalArgumentException("fromIndex(" . $fromIndex . ") > toIndex(" . $toIndex . ")");
        }
        if ($fromIndex < 0) {
            throw new ArrayIndexOutOfBoundsException($fromIndex);
        }
        if ($toIndex > $arrayLength) {
            throw new ArrayIndexOutOfBoundsException($toIndex);
        }
    }

}