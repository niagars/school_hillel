<?php


// Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.
/* Зрозумів так як ми робили, тільки оформити функцією - за параметр взяв знову ж другий елемент - працює) */
function number(array $arr, int $numb){
	foreach ($arr as $value) {
		if (is_array ($value)) {
			$keys = array_keys ($value);
			if (isset($keys[$numb])) {
			var_dump ($value[$keys[$numb]]);
			}
		}
	}
}


// Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false
function countb ($haystack) {
	if (is_string($haystack)){
		var_dump (substr_count($haystack, 'b'));
	}
		else var_dump (false);

}

// Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float
function square ($big, $small) : float {
	var_dump ($count = (float) $big/$small);
	return $count;
	}



?>