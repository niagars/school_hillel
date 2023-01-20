<?php

use PDO;

class DbImport
{	
	public function DBConnector (): PDO
	{
		try
		{
			$connect = new PDO('mysql:host=localhost; dbname=mybase', 'root', '');
			return $connect;
		}
		catch (\PDOException $e)
		{
			echo $e->getMessage();
		}
		
	}
	
	public function dataInsert (array $data) : void
	{
		
		$sql = "INSERT INTO users_create (name, email, age) VALUES (?,?,?)";
		$data2 = [];
		foreach ($data as $key=>$value)
		{
			$data2[]=$value;
		}
		$connect = $this->DBConnector();
		$connect->prepare($sql)->execute($data2);
		
	}
	
}



?>