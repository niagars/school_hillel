<?php

namespace App\models;

use PDO;

use Core\Orm\Select;
use Core\Orm\Insert;

class Home
{
	private string $tableName = 'home';
	//private array $tableNameJoin = ['about', 'users'];
	
	/* public function index ()
	{
		$select = new Select();
		$select->setFields(['school']);
		$select->setTableName($this->tableName);
		$select->setOrderBy(['college']);
		$select->setGroupBy(['school']);
		$select->setLimit([0, 2]);
		$select->setTypeJoin (' RIGHT JOIN ');
		$select->setTableNameJoin($this->tableNameJoin);
		$select->setFieldsJoin(['address, delivery']);
		$select->setFieldJoinUsing('id');

		return $select -> execute ();
	} */
	
	public function index ()
	{
		$select = new Select();
		$select->setTableName($this->tableName);
		//$select->setWhere()
		return $select->execute(); 
	}
	
	public function insert (array $data)
	{
		if(!empty($data['school']) && !empty($data['college']) && !empty($data['university']) )
		{
			$insert = new Insert();
			$insert->setTableName($this->tableName)
			->setColums(['school','college','university'])
			->setValues ([$data['school'], $data['college'], $data['university']])
			->execute();
		}
	}
}

?>