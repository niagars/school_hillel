<?php

include_once 'iImport.php'; 

class DbImport implements iImport
 
{
	public function setDBConnector (): PDO
	{
		return $this->DBConnector = new PDO('mysql:host=localhost; dbname=mybase', 'root', '');
	}
	
	public function dataInsert (array $data) : void
	{
		foreach ($data as $value)
		{
		$sql = "INSERT INTO users_age (name, age, email) VALUES ('$value[name]', $value[age], '$value[email]')";
		}
		$this->setDBConnector() -> query ($sql);
	}
	
}



?>