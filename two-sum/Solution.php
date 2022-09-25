<?php

class Solution {

    public function twoSum($nums, $target) {
        $flip = [];
        foreach ($nums as $key => $num) {
            if (isset($flip[$target - $num])) return [$key,$flip[$target - $num]];
            $flip[$num] = $key;
        }
        return [0,0];
    }
}

$solution = new Solution();
$result = $solution->twoSum([2,7,11,15], 26);

print_r($result);