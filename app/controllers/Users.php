<?php

namespace App\controllers;

use App\models\Users as modelUsers;
use Core\Render;

class Users 
	{
		public function index ()
		{
			$model = new modelUsers();
			$data ['test'] = $model -> index();
			Render::render('social/users.php', $data);
		}
	}


?>