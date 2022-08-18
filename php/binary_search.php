<?php

function binary_search ($arr, $item) {
    $low = 0;
    $high = count($arr) - 1;

    while($low <= $high) {
        $mid = floor(($high + $low) / 2); 
        if ($arr[$mid] < $item) {
            $low = $mid+1;
        }

        if ($arr[$mid] > $item) {
            $high = $mid-1;
        }

        if ($arr[$mid] == $item) {
            return $mid;
        }
    }

    return "不在列表";
}


$list = [1,2,3,4,5,6,7,8,9,10];
echo binary_search($list, 10);
