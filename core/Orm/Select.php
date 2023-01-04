<?php

namespace Core\Orm;

use PDO;
use Core\Orm\DBConnector;

class Select extends DBConnector
{
	
	public function execute ($tableName): array
	{
		$query = $this->buildQuery($tableName);
		$connector = new DBConnector();
		$dbh = $connector->connect();
		$query = $dbh -> query ($query);
		$rows = $query -> fetchAll (PDO::FETCH_ASSOC);
		return $rows;
	}

	private function buildQuery ($tableName): string
	{
		return 'SELECT * FROM ' .$tableName;
	}
	

}
?>