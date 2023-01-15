<?php

namespace App\models;

use PDO;

use Core\Orm\Select;

class Home
{
	private string $tableName = 'home';
	private array $tableNameJoin = ['about', 'users'];
	
	public function index ()
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
	}
}

?>