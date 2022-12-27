<?php

namespace App\models;

class Home
{
	public function index ()
	{
		$dbh = new \PDO('mysql:host=localhost; dbname=mybase', 'root', '');
		$sth = $dbh -> query ('SELECT * FROM home');
		$rows = $sth -> fetchAll (\PDO::FETCH_ASSOC);
		return $rows;
	}
}



?>