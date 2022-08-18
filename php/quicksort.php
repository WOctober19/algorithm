<?php


// function quicksort ($arr) { 
//     if(count($arr) < 2) {
//         return $arr;
//     } else {
//         $base = $arr[0];
//         $baseArr[0] = $arr[0];
//         $less = [];
//         $greater = [];
//         foreach (array_slice($arr,1) as $v) {
//             if ($base < $v) {
//                 array_push($greater,$v);
//             }

//             if ($base > $v) {
//                 array_push($less,$v);
//             }
//         }
//         return array_merge(quicksort($less),$baseArr,quicksort($greater));

//     }
// }
// // quicksort([5,9,1,2,0]);
// var_dump(quicksort([5,9,1,2,0]));

function multiplication ($arr,$num = 0) {
    $newAarr = array_filter($arr,function($v) use ($num){
        return $v*$num;
    });
}