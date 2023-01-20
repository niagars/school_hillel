<?php

namespace Core\Orm;

use PDO;
use Core\Orm\DBConnector;

class Select
{
	private string $tableName;
	
	private array $fields = ['*'];
	
	private array $orderBy;
	
	private array $groupBy;
	
	private array $limit;
	
	private array $tableNameJoin;
	
	private array $fieldsJoin = ['*'];
	
	private string $typeJoin;
	
	private string $fieldJoinUsing;
	
	private PDO $connector;
	
	public function __construct ()
	{
		$connector = new DBConnector();
		$this->connector = $connector->connect();
	}
	
	public function execute(): array
	{
		$sql = $this->buildQuery();
		$query = $this->connector -> query ($sql);
		//var_dump ($query);
		$rows = $query -> fetchAll (PDO::FETCH_ASSOC);
		return $rows;
	}

	private function buildQuery (): string
	{
		$sql = 'SELECT ' . $this->getFieldsString() . ' FROM ' .$this->tableName;
		
		if (!empty($this->tableNameJoin) && !empty($this->fieldJoinUsing)) 
		{$sql = 'SELECT ' .$this->getFieldsString() .',' .$this->getTableNameJoin() .' FROM ' .$this->tableName;
		foreach ($this->tableNameJoin as $key=>$name)
			{
			$sql .= $this->typeJoin . $this->tableNameJoin[$key] . ' USING (' .$this->fieldJoinUsing .')';}
			}
		if (!empty ($this->groupBy))
		{$sql .= ' GROUP BY ' .$this->getGroupBy();}	
	
		if (!empty($this->orderBy)) 
		{$sql .= ' ORDER BY ' .$this->getOrderBy();}
	
		if (!empty($this->limit)) 
		{$sql .= ' LIMIT ' .$this->getLimit();}
	
		return $sql;
	}
	
	public function setTableName (string $tableName)
	{
		$this->tableName = $tableName;
		return $this;
	}
	
	public function setFields (array $fields)
	{
		$this->fields = $fields;
		return $this;
	}
	
	public function getFieldsString (): string
	{
		$result = [];
		
		foreach ($this->fields as $key=>$field)
		{
			$result[] = (is_int($key)) ? $field : $field . ' as ' . $key;
		}
		return implode (',', $result);
	}
	
	public function getOrderBy ()
	{
		return implode (',', $this->orderBy); 
	}
	
	public function setOrderBy (array $orderBy)
	{
		$this->orderBy = $orderBy;
		return $this;
	}
	
	public function getGroupBy ()
	{
		return implode (',', $this->groupBy); 
	}
	
	public function setGroupBy (array $groupBy)
	{
		$this->groupBy = $groupBy;
		return $this;
	}
	
	public function getLimit ()
	{
		 return implode (',', $this->limit); 
	}
	
	public function setLimit (array $limit)
	{
		$this->limit = $limit;
		return $this;
	}
	
	public function setTableNameJoin (array $tableNameJoin)
	{
		$this->tableNameJoin = $tableNameJoin;
		return $this;
	}
	
	public function getTableNameJoin ():string
	{
		$result = [];
		foreach ($this->tableNameJoin as $key=>$name)
		{
			if (is_int($key)) 
			{
				if (!empty ($this->fieldsJoin)) {$result[] = $name . '.' . $this->getFieldsJoin();}
					else $result[] = $name . '.*';
			}	
		}
		//var_dump ($result);
		return implode (',', $result);
	}
	
	public function setFieldsJoin (array $fieldsJoin)
	{
		$this->fieldsJoin = $fieldsJoin;
		return $this;
	}
	
	public function getFieldsJoin ():string
	{
		$result = [];
		foreach ($this->fieldsJoin as $key=>$field)
		{
			if (is_int($key)) {$result[] = $field;}
		}
		//var_dump ($result);
		return implode (',', $result);
	}
	
	public function setTypeJoin (string $typeJoin)
	{
		$this->typeJoin = $typeJoin;
		return $this;
	}
	
	public function setFieldJoinUsing (string $fieldJoinUsing)
	{
		$this->fieldJoinUsing = $fieldJoinUsing;
		return $this;
	}
		
}
?>