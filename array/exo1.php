<?php

$array = [51, 78, 9, 23];

function insertElArray(array &$arr, $el)
{
    // $newArr = [...$arr];
    array_push($arr, $el);
    // return $arr;
};

insertElArray($array, 11);
var_dump($array);
