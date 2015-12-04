<?php
	//first phase
	//environment
	//development
	ini_set('display_errors','on');
	//informe de errores
	error_reporting(E_ALL);

	include 'config.php';
	require 'sys/helper.php';
	require 'sys/sesion.php';

	sesion::sesion_start();
	sesion::set_session_variable('Marti', 'PROBANDO');
	$sesion=sesion::get_session_variable('Marti');
	echo $sesion.'<br>';
	sesion::borrar_variable('Marti');
	sesion::borrarsesion();
	echo '<br>';

	$conf=Registry::getInstance();
	$conf->Welcome="hola";


	Coder::codear($conf);
	Core::init();
?>