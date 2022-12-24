<?php

namespace App\controllers;

use App\models\Gallery as modelGallery;
use Core\Render;

class Gallery extends Controller
	{
		public function index ()
		{
			//echo "Hi! I'm Gallery";
			$gallery = new modelGallery();
			$data ['test'] = $gallery -> index();
			//$this->render('social/gallery.php', $data);
			Render::render('social/gallery.php', $data);
		}
		public function setTest (string $test) // Метод створення нової сторінки після назви контролера
		{
			$this->test = $test;
			$test = mb_strtoupper ($test);
			echo "Hi! I'm <b>$test</b> in Gallery";
		}
	}


?>