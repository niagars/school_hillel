<?

$firstArr = [

  'one' => 1,

  'two' => [

    'one' => 1,

  'seven' => 22,

  'three' => 32,

  ],

  'three' => [

'one' => 1,

'two' => 2,

  ],

  'foure' => 5,
  

  'five' => [

   'three' => 32,

   'foure' => 5,

   'five' => 12,
   
   

],  
	
];


include 'function.php';


// Создать функцию принимающую массив произвольной вложенности и определяющий любой элемент номер которого передан параметром во всех вложенных массивах.
/* Зрозумів так як ми робили, тільки оформити функцією - за параметр взяв знову ж другий елемент - працює) */
number ($firstArr, 1);
echo ("<br>");


// Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false
$str = 'Mozilla is my best of the best brother';
countb ($str);
echo ("<br>");



// Рахуємо суму всіх елементів масиву довільної глибини
$singleArr = array ();
function suma ($value) {
	global $singleArr;
	$singleArr[] = $value;
}
array_walk_recursive($firstArr, 'suma');
print_r(array_sum($singleArr));
echo ("<br>");
	
	
// Кількість менших квадратів вписаних в більший квадрат, вивожу в float без заокруглення.	
square (9, 6);	
	
	



?>