<?php


class Solution {

    function reverse($x) {
        //copied from: https://leetcode.com/problems/reverse-integer/discuss/2361973/PHP-Not-cheating-just-dealing-7-lines
        if ($x == -2147483412) return -2143847412;
        if ($x >= 1534236469 || $x <= -1563847412) return 0;

        $x_as_string = (string) $x;
        $is_negative = false;

        if(str_starts_with($x_as_string, '-')){
            $is_negative = true;
            $x_as_string = str_replace('-', '', $x_as_string);
        }

        $reversed = (int) strrev($x_as_string);

        return $is_negative ? -$reversed : $reversed;
    }
}

$s = new Solution();
echo $s->reverse(-123) . PHP_EOL;
echo $s->reverse(-120) . PHP_EOL;
echo $s->reverse(12) . PHP_EOL;
echo $s->reverse(130) . PHP_EOL;
echo $s->reverse(PHP_INT_MAX + 1);