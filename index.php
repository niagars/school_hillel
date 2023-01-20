<?php

/* include_once 'DbImport.php';
include_once 'ReportImport.php';


$data = [
		['name' => 'Tom', 'age' => 25, 'email' => 'tom@gmail.com'],
		['name' => 'Kate', 'age' => 35, 'email' => 'kate@gmail.com'],
		['name' => 'Jim', 'age' => 45, 'email' => 'jim@gmail.com'],
		['name' => 'Vasyl', 'age' => 55, 'email' => 'vasyl@gmail.com'],
		['name' => 'Petro', 'age' => 65, 'email' => 'petro@gmail.com'],
];


$sql = new DbImport();
$sql -> dataInsert($data);

$table = new ReportImport();
$table -> dataInsert($data); */

include_once 'ExportData.php';

$sql = new DbImport();
$sql -> dataInsert($_GET);

echo "Data export OK!"

?>