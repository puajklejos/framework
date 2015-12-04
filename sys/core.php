<?php

	require 'sys/request.php';
	class Core{
		static private $controller;
		static private $action;

		static function init(){
		//echo 'Core arrenca app';
		//recuperar el request
			//echo $_SERVER['REQUEST_URI'];
			Request::retrieve();
			$controller=Request::getCont();
			self::$controller=$controller;
			//Coder::code($controller);

			$action=Request::getAct();
			self::$action=$action;
			//Coder::code($action);

			$params=Request::getParams();
			//Coder::codear($params);
	
			self::router();
		}
		static function router(){
			$contr_call=(self::$controller!="")?self::$controller:'home';
			$action_call=(self::$action!="")?self::$action:'home';
			$filename=$contr_call.'.php';
			$filecontroller=APP.'controllers'.DS.ucfirst($filename);
			//make an instance of controller
			if (is_readable($filecontroller)){
				$cont=new $contr_call();
				if(is_callable(array($cont, $action_call)))
				{
					call_user_func(array($cont, $action_call));
				}
				else
				{
					// no function
					//echo 'No action';
				}
				
				//Coder::codear($cont);
				
			}else{
				//no controller
				//echo 'No controller';
			}
		}

	}

?>