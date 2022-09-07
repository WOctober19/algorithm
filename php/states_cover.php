<?php

$states_needed = ["mt", "wa", "or", "id", "nv", "ut", "ca", "az"];

$stations = [];
$stations["kone"] = ["id", "nv", "ut"];
$stations["ktwo"] = ["wa", "id", "mt"];
$stations["kthree"] = ["or", "nv", "ca"];
$stations["kfour"] = ["nv", "ut"];
$stations["kfive"] = ["ca", "az"];

$station_array = [];

while ($states_needed) {
    $best_states = null;
    $states_cover = [];
    
    foreach ($stations as $k=>$v) {
        $intersect_city = array_intersect($v,$states_needed);
        // var_dump($v);
        if (count($intersect_city) > count($states_cover)) {
            $best_states = $k;
            $states_cover = $v;
        }
    }
    
    $states_needed = array_diff($states_needed,$states_cover);
   
    array_push($station_array,$best_states);
}

var_dump($station_array);