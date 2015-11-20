<?php

	require 'sys/request.php';
	class Core{
		static function init(){
		//echo 'Core arrenca app';
		//recuperar el request
			//echo $_SERVER['REQUEST_URI'];
			Request::retrieve();
			$controller=Request::getCont();
			echo $controller.'<br>';
			$action=Request::getAct();
			echo $action.'<br>';
			$params=Request::getParams();
			print_r($params);

		}
	}

?>