<?php

namespace App\controllers;

use App\models\Home as modelHome;
use Core\Render;

class Home extends Controller

	{
		public function index ()
		{
			$model = new modelHome();
			$data ['test'] = $model -> index();
			//print_r ($_GET);
			Render::render('social/home.php', $data);
			
		}
		
		public function insert ()
		{
			$model = new modelHome();
			$data[] = $model->insert($_GET);
			//print_r ($_GET);
			Render::render('social/regestry.php');
		}
		/* public function setTest (string $test) // Метод створення нової сторінки після назви контролера
		{
			$this->test = $test;
			$test = mb_strtoupper ($test);
			echo "Hi! I'm <b>$test</b> in Home";
		} */
		public function method ()
		{
			echo 'Method';
		}
		public function error ()
		{
			echo 'Error';
		}
	}


?>