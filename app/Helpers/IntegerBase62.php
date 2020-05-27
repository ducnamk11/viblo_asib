<?php

use function PHPSTORM_META\map;

/**
 * Converter int to string
 *
 * @param integer $num
 * @return string base62
 */
function base62_int_encode(int $num)
{
    $map = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

    $stringBase62 = '';

    while ($num) {
        $stringBase62 .= $map[$num % 62];
        $num = (int) ($num / 62);
    }

    return empty($stringBase62) ? 'a' : strrev($stringBase62);
}

/**
 * Converter base62 string to interger
 *
 * @param string $base62
 * @return int
 */
function base62_int_decode(string $base62)
{
    $int = 0;

    $ord = function (string $char) {
        static $remember = [];
        return $remember[$char] ?? $remember[$char] = ord($char);
    };

    foreach (range(0, strlen($base62) - 1) as $i) {
        $char = $ord($base62[$i]);

        if ($ord('a') <= $char && $char <= $ord('z')) {
            $int = $int * 62 + $char - $ord('a');
        }
        if ($ord('A') <= $char && $char <= $ord('Z')) {
            $int = $int * 62 + $char - $ord('A') + 26;
        }
        if ($ord('0') <= $char && $char <= $ord('9')) {
            $int = $int * 62 + $char - $ord('0') + 52;
        }
    }

    return $int;
}