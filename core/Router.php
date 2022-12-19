<?php

namespace Core;


use App\controllers\Error404;

class Router 
	{
		public function run ()
		{
			$url = explode ('/', $_SERVER["REQUEST_URI"]);
			if (empty($url[1]))
				{
				$url[1] = 'Home';
				$className = '\App\controllers\\' . $url[1];
				$className = new $className;
				$className->index();
				}
			else
				{
					$className = '\App\controllers\\' . ucfirst($url[1]);
					if (class_exists($className))
					{
						$className = new $className;
						if (method_exists($className, 'settest') and isset ($url[2])) //Створюю нову сторінку після назви контролера/ 
						{
							$className -> setTest ($url[2]); // Беру з url введено слово після назви контрлера/ і передаю методу на виконання
						}
						else
						{
							$className->index();
						}							
					}
					else 
					{
						$className = new Error404;
						$className->index();
					}
				}
		}
	
							
		
 

	}

	
?>