<?php
	ob_start();
	error_reporting(E_ALL);
	require_once $libpath = substr(str_replace('\\', '/', __dir__), 0, -29).'library/parameters.php';
	require_once $dir_library.'initialize.php';
		
	//Auth
	if(!$session->is_logged_in()){ 
		$session->message = "Login to Continue";
		redirect_to($dir_site.'admin/login');
	}else{
		$date = only_datetime($time);
		if($session->type!='admin'){
			redirect_to($dir_site.$session->type);
		}
		$user = User::find_by_id($session->user_id);
		$members = Message::find_distinct_email();
		$allmessages = Message::find_all();
		$scheduledmessages = Message::find_scheduled($date);
	}
	$title = "Dashboard";
	
	include $dir_admin.'home.php';
?>