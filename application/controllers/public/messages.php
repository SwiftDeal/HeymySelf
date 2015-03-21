<?php
	ob_start();
	require_once $libpath = substr(str_replace('\\', '/', __dir__), 0, -30).'library/parameters.php';
	require_once $dir_library.'initialize.php';

	$title = "hey myself";
	
	$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
	$per_page = '6';
	
	$allmessages = Message::find_all_public();
	$total = count($allmessages);
	
	$pagination = new Pagination($page, $per_page, $total);
	
	$messages = Message::find_public($per_page, $pagination->offset());
	
	include $dir_public.'messages.php';
?>