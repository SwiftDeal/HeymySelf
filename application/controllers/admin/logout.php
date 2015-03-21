<?php
	ob_start();
	require_once $libpath = substr(str_replace('\\', '/', __dir__), 0, -29).'library/parameters.php';
	require_once $dir_library.'initialize.php';

	$session->logout();
	redirect_to('home');
?>