<?php

namespace Core\Orm;

use PDO;
use Core\Orm\DBConnector;

class Insert
{
	private string $tableName;
	
	private array $colums;
	
	private array $values;
			
	private PDO $connector;
	
	public function __construct ()
	{
		$connector = new DBConnector();
		$this->connector = $connector->connect();
	}
	
	public function execute()
	{
		$sql = $this->buildQuery();
		//var_dump ($sql);
		$query = $this->connector -> query ($sql);
		return $query;
	}

	private function buildQuery (): string
	{
		$sql = 'INSERT INTO ' . $this->tableName . '(' . $this->getColums() . ') VALUES (' . $this->getValues() . ')';
		return $sql;
	}
	
	public function setTableName (string $tableName)
	{
		$this->tableName = $tableName;
		return $this;
	}
	
	public function setColums (array $colums)
	{
		$this->colums = $colums;
		return $this;
	}
	
	public function getColums (): string
	{
		return implode (',', $this->colums);
	}
	
	public function setValues (array $values)
	{
		$this->values = $values;
		return $this;
	}
	
	public function getValues (): string
	{
		$arr = [];
		foreach ($this->values as $key=>$values)
		{
			$arr[] = "'" . $values . "'";
		}
		//var_dump($arr);
		return implode (',', $arr);
		
	}
	
		
}
?>