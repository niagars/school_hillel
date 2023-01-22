<?php

namespace Core\Orm;

class Insert extends Sql
{
	private array $colums;
	
	private array $values;
			
	protected function buildQuery (): string
	{
		$sql = 'INSERT INTO ' . $this->tableName . '(' . $this->getColums() . ') VALUES (' . $this->getValues() . ')';
		return $sql;
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