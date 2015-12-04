<?php

	class vHome extends View{
		function __construct(){
			parent::__construct();
			//echo "View creat<br>";
			$this->tpl=Template::load('Home');
		}
	}

?>