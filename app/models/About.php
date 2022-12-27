<?php

namespace App\models;

class About
{
	public function index ()
	{
		$dbh = new \PDO('mysql:host=localhost; dbname=mybase', 'root', '');
		$sth = $dbh -> query ('SELECT * FROM about');
		$rows = $sth -> fetchAll (\PDO::FETCH_ASSOC);
		return $rows;
				
		
		
		/* return 
		[
			'Школа' => 'ITHillel',
			'Курс' => 'PHP',
			'І як?' => 'Норм',
		]; */
	}
}



?>