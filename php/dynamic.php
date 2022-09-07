<?php

$str = "clues";
$str1 = "blue";

$strCount = strlen($str);
$strCount1 = strlen($str1);

$arr = [];


for ($i = 0; $i < $strCount; $i++) {
    for ($j = 0; $j < $strCount1; $j++) {
        echo $str[$i];
        if ($str[$i] == $str1[$j]) {
            $arr[$i][$j] = $arr[$i-1][$j-1] + 1;
            echo 1111;
        } else {
            $arr[$i][$j] = 0;
        }
    }
}

var_dump($arr);