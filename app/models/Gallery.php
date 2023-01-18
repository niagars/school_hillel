<?php

namespace App\models;

use Core\Orm\Select;
use Core\Orm\Insert;

class Gallery
{

	
	private string $tableName = 'gallery';
	//private array $tableNameJoin = ['about'];
	
	public function index ()
	{
		$select = new Select();
		$select->setTableName($this->tableName);
		return $select -> execute ();
	}
	
	public function insert (array $data)
	{
		if(!empty($data['name']) && !empty($data['description']) && !empty($data['typefile']))
		{
			$insert = new Insert();
			$insert->setTableName($this->tableName);
			$insert->setColums(['name','description','typefile']);
			$insert->setValues ([$data['name'], $data['description'], $data['typefile']]);
			$insert->execute();
		}
	}
}






?>