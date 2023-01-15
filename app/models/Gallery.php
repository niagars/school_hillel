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
	
	private string $tableName = 'gallery';
	//private array $tableNameJoin = ['about'];
	
	public function index ()
	{
		$select = new Select();
		//$select->setFields(['id', 'college']);
		$select->setTableName($this->tableName);
		//$select->setOrderBy(['college']);
		//$select->setGroupBy(['college']);
		//$select->setLimit([0, 2]);
		/* $select->setTypeJoin (' LEFT JOIN ');
		$select->setTableNameJoin($this->tableNameJoin);
		$select->setFieldsJoin(['address, delivery']);
		$select->setFieldJoinUsing('id'); */

		return $select -> execute ();
	}
}






?>