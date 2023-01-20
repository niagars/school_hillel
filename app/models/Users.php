<?php

namespace App\models;

use PDO;

use Core\Orm\Select;
use Core\Orm\Insert;

class Users
{
	/* public function index ()
	{
		$dbh = new PDO('mysql:host=localhost; dbname=mybase', 'root', '');
		$sth = $dbh -> query ("SELECT * FROM users");
		$rows = $sth -> fetchAll (PDO::FETCH_ASSOC);
		return $rows;
	} */
	private string $tableName = 'users';
	//private string $tableNameJoin = 'about';
	
	public function index ()
	{
		$select = new Select();
		$select->setTableName($this->tableName);
		return $select -> execute ();
	}
	
	public function insert (array $data)
	{
		if(!empty($data['email']) && !empty($data['login']) && !empty($data['password']) && !empty($data['phone']))
		{
			$insert = new Insert();
			$insert->setTableName($this->tableName);
			$insert->setColums(['email','login','password','phone','firstname','lastname']);
			$insert->setValues ([$data['email'], $data['login'], $data['password'], $data['phone'], $data['firstname'], $data['lastname']]);
			$insert->execute();
		}
	}
}


?>