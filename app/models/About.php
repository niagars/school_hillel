<?php

namespace App\models;

use Core\Orm\Select;
use Core\Orm\Insert;

class About
{
	private string $tableName = 'about';
	private array $where = [ 	
								['or', "themes='777'", "number=777", "address='777'"], 
								['or', "themes='888'", "number=888", "address='888'"],
								["themes='666'", "number=666", "address='666'"]
								
							];
	//private array $tableNameJoin = ['about'];
	
	public function index ()
	{
		$select = new Select();
		$select->setTableName($this->tableName);
		$select->setWhere($this->where);
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