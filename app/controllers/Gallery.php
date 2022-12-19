<?php

namespace App\controllers;

class Gallery 
	{
		public function index ()
		{
			echo "Hi! I'm Gallery";
		}
		public function setTest (string $test) // Метод створення нової сторінки після назви контролера
		{
			$this->test = $test;
			$test = mb_strtoupper ($test);
			echo "Hi! I'm <b>$test</b> in Gallery";
		}
	}


?>