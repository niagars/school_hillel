<?php

// Создать скрипт который генерирует массив с рандомными числами. Длина массива 50 элементов.
$array = [];
for ($i=1; $i<=50; $i++)
{
	$array[]= rand (1, 100);
}
echo "<pre>";
print_r ($array);
echo "</pre>";

// Посчитать сумму элементов массива с помощью функции php и без.
$k = count ($array);
$s = 0;
foreach ($array as $value)
{
	$s += $value;
}
echo "<br> Сума масиву без спец. функції = ";
print_r ($s);
$s = array_sum ($array);
echo "<br> Сума масиву через функцію = ";
print_r ($s);

// Посчитать произведение элементов массива с помощью функции и без.
$d = 1;
foreach ($array as $value)
{
	$d = $d*$value;
}
echo "<br> Добуток без спец. функції = ";
print_r ($d);
$d = array_product ($array);
echo "<br> Добуток через функцію = ";
print_r ($d);

// Достать минимальное число с массива.
echo "<br> Мінімальне число масиву = ";
print_r (min ($array));

// Достать максимальное число с массива.
echo "<br> Максимальне число масиву = ";
print_r (max ($array));

//Разделить массив на два массива, один будет содержать только четные числа, второй только нечетные.
function odd($var) //Непарні
{
    return $var & 1;
}
function even($var) //Парні
{
    return !($var & 1);
}
echo "<pre>";
print_r ($array2 = array_filter($array, "even"));
echo "</pre>";
echo "<pre>";
print_r ($array3 = array_filter($array, "odd"));
echo "</pre>";
?>


