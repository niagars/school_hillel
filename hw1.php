<?php

//Получить остаток деления 7 на 3
$x = 7;
$y = 3;
$z = $x % $y;
print_r ($z);
echo "<br>";

//Получить целую часть сложения 7 и 7,15
$y = 7.15;
$z = (int)($x + $y);
print_r ($z);
echo "<br>";

$x = 25;
print_r(sqrt($x));
echo "<br>";
echo "<br>";

//Получить 4-е слово из фразы - Десять негритят пошли купаться в море
$str = "десять негритят пошли купаться в море";
$strtoarr = explode(' ', $str);
print_r ($strtoarr[3]);
echo "<br>";

//Получить 17-й символ из фразы - Десять негритят пошли купаться в море
$symvol = mb_str_split($str, 1);
print_r ($symvol[16]);
echo "<br>";

//Сделать заглавной первую букву во всех словах фразы - Десять негритят пошли купаться в море
$strtoarr2 = [];
foreach ($strtoarr as $value) {
	$strtoarr2 = mb_convert_case ($str, MB_CASE_TITLE);
}
print_r ($strtoarr2);
echo "<br>";

//Посчитать длину строки - Десять негритят пошли купаться в море
print_r (strlen($str));
echo ' байт і ';
$count = count (mb_str_split($str, 1));
print_r ($count);
echo " символів";
echo "<br>";
echo "<br>";

//Правильно ли утверждение true равно 1
$x = 1;
$y = true;
if ($x == $y) {echo 'true дорівнює 1';} else {echo 'true НЕдорівнює 1';};
echo "<br>";

//Правильно ли утверждение false тождественно 0
$x = 0;
$y = false;
if ($x === $y) {echo 'false тотожне 1';} else {echo 'false НЕтотожне 1';};
echo "<br>";

//Какая строка длиннее three - три
$str1 = "three";
$str2 = "три";
$d1 = mb_str_split($str1, 1);
$d2 = mb_str_split($str2, 1);
if ($d1>$d2) {echo "$str1 довше";} else {echo "$str2 довше";};
echo "<br>";

//Какое число больше 125 умножить на 13 плюс 7 или 223 плюс 28 умножить 2
$a = 125*13+7;
$b = 233+28*2;
$aa = '125*13+7';
$bb = '233+28*2';
if ($a>$b) {echo "$aa більше за $bb";} else {echo "$bb білше за $aa";};
?>
