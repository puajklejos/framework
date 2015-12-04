<?php

	spl_autoload_register(null, false);
	spl_autoload_register('MAutoload::SysLoader');
	spl_autoload_register('MAutoload::Controllers');
	spl_autoload_register('MAutoload::Models');
	spl_autoload_register('MAutoload::Templates');
	spl_autoload_register('MAutoload::Views');

	class Mautoload{

	static function SysLoader($class){
			$filename=strtolower($class).'.php';
			$file=ROOT.'sys'.DS.$filename;
			if(!file_exists($file)){
				return false;
			}
			require $file;
		}

	static function Controllers($class){
			$filename=strtolower($class).'.php';
			$file=APP.'controllers'.DS.$filename;
			if(!file_exists($file)){
				return false;
			}
			require $file;
		}

	static function Models($class){
			$filename=strtolower($class).'.php';
			$file=APP.'models'.DS.$filename;
			if(!file_exists($file)){
				return false;
			}
			require $file;
		}


	static function Templates($class){
			$filename=strtolower($class).'.php';
			$file=APP.'templates'.DS.$filename;
			if(!file_exists($file)){
				return false;
			}
			require $file;
		}

		static function Views($class){
			$filename=strtolower($class).'.php';
			$file=APP.'views'.DS.$filename;
			if(!file_exists($file)){
				return false;
			}
			require $file;
		}
	
	}

	class Coder{
		static function code($var){
			//echo '<pre>'.$var.'</pre>';
		}
		static function codear($var){
			//echo '<pre>'.var_dump($var).'</pre>';
		}
		static function ContLoader ($class)
		{
		$filename=strtolower($class).'.php';
		$file=APP.'controllers'.DS.$filename;
		if(!file_exists($file)){
			return false;
		}
	}
}


?>