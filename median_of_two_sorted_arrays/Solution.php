<?php


class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $array = array_merge($nums1, $nums2);
        sort($array);
        $arraySize = count($array);
        $index = floor($arraySize / 2);

        if ($arraySize & 1) {
            return $array[$index];
        }

        return ($array[$index-1] + $array[$index]) / 2;
    }
}

$solution = new Solution();

$nums1 = [1,2];
$nums2 = [3,4];

echo $solution->findMedianSortedArrays($nums1, $nums2);