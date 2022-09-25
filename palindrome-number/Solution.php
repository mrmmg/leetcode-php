<?php

/**
 * https://leetcode.com/problems/palindrome-number/
 */

class Solution {

    function isPalindrome($x) {
        $x = (string) $x;

        return $x === strrev($x);
    }
}

$s = new Solution();
var_dump($s->isPalindrome(121));
var_dump($s->isPalindrome(10));