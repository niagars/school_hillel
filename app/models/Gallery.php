<?php

namespace App\models;

use Core\Orm\Select;

class Gallery
{
	/* public function index ()
	{
		$dbh = new \PDO('mysql:host=localhost; dbname=mybase', 'root', '');
		$sth = $dbh -> query ('SELECT * FROM gallery');
		$rows = $sth -> fetchAll (\PDO::FETCH_ASSOC);
		return $rows;
	} */
	
	public function index ()
	{
		$select = new Select();
		$arrName = mb_strtolower(get_class($this));
		$name = explode('\\', $arrName);
		return $select -> execute ("$name[2]");
	}
}





?>