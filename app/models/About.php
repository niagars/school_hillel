<?php

namespace App\models;

use Core\Orm\Select;
use Core\Orm\Insert;

class About
{
	private string $tableName = 'about';
	//private array $tableNameJoin = ['about'];
	
	public function index ()
	{
		$select = new Select();
		$select->setTableName($this->tableName);
		return $select -> execute ();
	}
	
	public function insert (array $data)
	{
		if(!empty($data['themes']) && !empty($data['address']) && !empty($data['delivery']))
		{
			$insert = new Insert();
			$insert->setTableName($this->tableName);
			$insert->setColums(['themes','number','address','delivery']);
			$insert->setValues ([$data['themes'], $data['number'], $data['address'], $data['delivery']]);
			$insert->execute();
		}
	}
}



?>