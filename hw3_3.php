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
/* Отримання всіх других елементів вкладених масивів */
foreach ($firstArr as $i => $value) {
	if ($firstArr [$i] === intval ($firstArr [$i])) {/*print_r ($firstArr[$i]); */echo (" ");} 
	else {
		$arr2 = $firstArr [$i];
		$arr2 = array_values ($arr2);
		foreach ($arr2 as $j => $value) if ($j==1){print_r ($arr2[$j]); echo ("<br>");} }
}



/* Підрахунок всіх елементів масиву, в поняття ВСІХ включив елементи вкладених масивів */

$k=0;
$k2=0;
foreach ($firstArr as $i => $value) {
	if ($firstArr [$i] === intval ($firstArr [$i])) {
		$k=$k+1;
		echo ("<br>");} 
	else {
		$arr2 = $firstArr [$i];
		$arr2 = array_values ($arr2);
		$k2=$k2+count($arr2);
	}
}
print_r ($k+$k2); echo (" ");


/* Отримання суми всіх значень в масиві, так само ВСІХ зрозумів як елементів вкладених масивів */

$s=0;
$s2=0;
foreach ($firstArr as $i => $value) {
	if ($firstArr [$i] === intval ($firstArr [$i])) {
		$s=$s+$firstArr [$i];
		echo ("<br>");} 
	else {
		$arr2 = $firstArr [$i];
		$arr2 = array_values ($arr2);
		$s2=$s2+array_sum($arr2);
	}
}
print_r ($s+$s2); echo (" ");


?>