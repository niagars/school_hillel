<?php

namespace App\controllers;

class About 
	{
		public function index ()
		{
			echo "Hi! I'm About";
		}
		public function setTest (string $test) // Метод створення нової сторінки після назви контролера
		{
			$this->test = $test;
			$test = mb_strtoupper ($test);
			echo "Hi! I'm <b>$test</b> in About";
		}
	}


?>