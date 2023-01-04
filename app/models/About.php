<?php

namespace App\models;

use Core\Orm\Select;

class About
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