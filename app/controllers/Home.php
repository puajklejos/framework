<?php

	class Home extends Controller{
		protected $model;
		protected $view;

		function __construct(){
			parent::__construct();
			$this->model=new mHome;
			$this->view=new vHome;
			//echo 'Hello controller!';
		}
		function Home(){
			//echo 'i\m the action';
		}
	}
	

?>