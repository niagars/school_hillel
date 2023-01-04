<?php

namespace App\models;

use PDO;

use Core\Orm\Select;

class Home
{
	public function index ()
	{
		$select = new Select();
		$arrName = mb_strtolower(get_class($this));
		$name = explode('\\', $arrName);
		return $select -> execute ("$name[2]");
	}
}

?>