<?php


/* Довжина масиву */
$k=0;
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
foreach ($arr as $i => $value) {
	$k=$k+1;   
}
echo ("<br>");
print_r ($k);
echo ("<br>");


/* Переміщення перших чотирьох елементів в кінець масиву */
for ($i=0; $i<=3; $i++) {
	$arr1[$i] = $arr[$i];}
for ($i=4; $i<count($arr); $i++) {
	$arr2[$i] = $arr[$i];}
print_r ($arr3 = array_merge ($arr2, $arr1));
echo ("<br>");


/*Сума 4, 5, 6 елементів */
$sum=0;
for ($i=3; $i<=5; $i++) {
	$sum = $sum+$arr[$i];}
print_r ($sum);


?>