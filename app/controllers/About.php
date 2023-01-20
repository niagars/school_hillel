<?php

namespace App\controllers;

use App\models\About as modelAbout;
use Core\Render;

class About 
	{
		public function index ()
		{
			//echo "Hi! I'm About";
			$model = new modelAbout();
			$datax ['test'] = $model -> index();
			$data[] = $model->insert($_POST);
			Render::render('social/about.php', $datax);
		}
		/* public function setTest (string $test) // Метод створення нової сторінки після назви контролера
		{
			$this->test = $test;
			$test = mb_strtoupper ($test);
			echo "Hi! I'm <b>$test</b> in About";
		} */
	}


?>