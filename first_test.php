<?php
$array1 = [0,1,0,3,12];
$zero = [];
$sorted = array_map(function($a) use ($array1, $zero) {
  $arr = [];
  if ($a === 0) {
    array_push($zero, $a);

    $arr = array_diff($array1, $zero);
  }
  return array_merge($arr,$zero);
},$array1);
print_r($sorted);

?>