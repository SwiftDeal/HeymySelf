<?php
	ob_start();
	require_once $libpath = substr(str_replace('\\', '/', __dir__), 0, -30).'library/parameters.php';
	require_once $dir_library.'initialize.php';

	$title = "hey myself";
	
	include $dir_public.'home3.php';
?>