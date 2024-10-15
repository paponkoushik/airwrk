<?php
$array1 = [1,2,2,1];
$array2 = [2,2];
$common = array_unique(array_intersect($array1, $array2));
var_dump($common);


?>