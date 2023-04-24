<?php
/**
 * 快速排序
 */
function qsort($arr){
    if (count($arr) <= 1){
        return $arr;
    }
    $left = $right = [];
    foreach ($arr as $key => $value){
        if ($key == 0) continue;
        if ($value <= $arr[0]){
            $left[] = $value;
        } else{
            $right[] = $value;
        }
    }
    return array_merge(qsort($left) , [$arr[0]] , qsort($right));
}

$input = [44,59,23,3,12,64,0,14,5];
$output = qsort($input);
print_r($input);
print_r($output);