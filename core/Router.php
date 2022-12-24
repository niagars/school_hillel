<?php

namespace Core;

use App\controllers\Error404;

class Router 
	{
		public function run ()
		{
			$url = !empty($_SERVER['REDIRECT_URL']) ? $_SERVER ['REDIRECT_URL'] : '/';
			$config = require '../config/common.php';
			//var_dump ($config);
			if (array_key_exists ($url, $config))
			{
				$query = explode('@', $config[$url]);
				$className = $query[0];
				$methodName = $query[1];
			}
			else
			{
				$className = 'Error404';
				$methodName = 'error';
			}
			$className = '\App\controllers\\' . $className;
			if (class_exists($className))
			{
				$classObj = new $className();
			}
			else
			{
				$classObj = new Error404();
			}
			if (method_exists($classObj, $methodName))
			{
				$classMethod = $methodName;
			}
			else
			{
				$classMethod ='error';
			} 	
			$classObj->$classMethod();
		}
	
							
		
 

	}

	
?>