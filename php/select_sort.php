<?php

function findSmallest($arr) {
    $Smallest = $arr[0];
    $SmallestIndex = 0;
    foreach ($arr as $k => $v) {
        if ($Smallest > $v) {
            $Smallest = $v;
            $SmallestIndex = $k;
        }
    }
    return $SmallestIndex;
}

function selectionSort($arr) {
    $newArr = [];

    foreach ($arr as $k => $v) {
        $SmallestIndex = findSmallest($arr);
        array_push($newArr,array_splice($arr,$SmallestIndex,1)[0]);
    }

    var_dump($newArr);
}

die();
selectionSort([3,7,1,2,0,8]);
