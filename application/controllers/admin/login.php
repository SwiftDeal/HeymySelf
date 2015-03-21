<?php
	ob_start();
	require_once $libpath = substr(str_replace('\\', '/', __dir__), 0, -29).'library/parameters.php';
	require_once $dir_library.'initialize.php';
		
	//Auth
	if($session->is_logged_in()){ 
		$session->message = "Login to Continue";
		redirect_to('admin');
	}
	
	include $dir_admin.'login.php';
?>