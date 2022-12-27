<?php

namespace App\models;

class Users
{
	public function index ()
	{
		$dbh = new \PDO('mysql:host=localhost; dbname=mybase', 'root', '');
		$sth = $dbh -> query ('SELECT * FROM users');
		$rows = $sth -> fetchAll (\PDO::FETCH_ASSOC);
		return $rows;
	}
}

?>