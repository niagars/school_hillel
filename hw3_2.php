<?php

$firstArr = [

  'one' => 1,

  'two' => 2,

  'three' => 3,

  'foure' => 5,

  'five' => 12,

];



$secondArr = [

  'one' => 1,

  'seven' => 22,

  'three' => 32,

  'foure' => 5,

  'five' => 13,

  'six' => 37,

];
/* Всі елементи, які пристутні в другому і відсутні в першому */
$result1 = array_diff($secondArr, $firstArr);
print_r($result1);
echo ("<br>");

/* Всі елементи, які пристутні в першому і відсутні в другому */
$result2 = array_diff($firstArr, $secondArr);
print_r($result2);
echo ("<br>");

/* Елементи, значення яких співпадають */
$result = array_intersect($firstArr, $secondArr);
print_r($result);
echo ("<br>");

/* Всі елементи з різними значеннями */
print_r ($result3 = array_values ($result1) + $result2);
echo ("<br>");

?>