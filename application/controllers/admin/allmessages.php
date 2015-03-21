<?php
	ob_start();
	error_reporting(E_ALL);
	require_once $libpath = substr(str_replace('\\', '/', __dir__), 0, -29).'library/parameters.php';
	require_once $dir_library.'initialize.php';
		
	//Auth
	if(!$session->is_logged_in()){ 
		$session->message = "Login to Continue";
		redirect_to('admin/login');
	}else{
		$date = only_datetime($time);
		if($session->type!='admin'){
			redirect_to($dir_site.$session->type);
		}
		$user = User::find_by_id($session->user_id);
		$allmessages = Message::find_all();
	}
	$title = "Messages";
	
	include $dir_admin.'allmessages.php';
?>