<?php

namespace Core\Orm;

use PDO;
use Core\Orm\DBConnector;
use Core\Orm\Where;

abstract class Sql
{
	protected string $tableName;
	
	protected array $where;
	
	protected PDO $connector;
	
	public function __construct ()
	{
		$connector = new DBConnector();
		$this->connector = $connector->connect();
	}
	
	public function execute()
	{
		$sql = $this->buildQuery();
		$query = $this->connector -> query ($sql);
		return $query;
	}

	abstract protected function buildQuery () : string;
	
	
	public function setTableName (string $tableName)
	{
		$this->tableName = $tableName;
		return $this;
	}
	
	public function setWhere (array $where): self
	{
		$this->where = $where;
		return $this;
	}
	
	public function getWhere (): string
	{
		$whereOb = new Where($this->where);
		return $whereOb->where();
	}
	
	
	
	
		
}
?>