<?php

namespace App\controllers;

use App\models\Users as modelUsers;
use Core\Render;

class Users 
	{
		public function index ()
		{
			$model = new modelUsers();
			$datax ['test'] = $model -> index();
			//print_r ($_GET);
			$data[] = $model->insert($_GET);
			Render::render('social/users.php', $datax);
			
		}
		
		/* public function insert ()
		{
			$model = new modelUsers();
			$data[] = $model->insert($_GET);
			//print_r ($_GET);
			Render::render('social/users.php');
		} */
	}


?>