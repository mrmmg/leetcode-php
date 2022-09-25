<?php

/**
 * https://leetcode.com/problems/string-to-integer-atoi/submissions/
 */

class Solution {

    private int $min_number = -2 ** 31;
    private int $max_number = (2 ** 31) - 1;

    function myAtoi($s) {
        $s = trim($s);
        if (preg_match('/^(-|\+)?\d+/', $s, $match)){
            //convert to int without any casting!
            $number = $match[0] - 0;

            if ($number < $this->min_number) {
                return $this->min_number;
            }

            if ($number > $this->max_number) {
                return $this->max_number;
            }

            return $number;
        }

        return 0;
    }
}

$s = new Solution();
echo $s->myAtoi("           -4193 with words me");