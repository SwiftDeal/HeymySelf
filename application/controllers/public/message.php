<?php
	ob_start();
	require_once $libpath = substr(str_replace('\\', '/', __dir__), 0, -30).'library/parameters.php';
	require_once $dir_library.'initialize.php';

	$title = "hey myself";
	
	$id = mysql_real_escape_string(htmlentities(trim($_GET['message_id'])));
	$message = Message::find_by_id('id', $id);
	
	include $dir_public.'message.php';
?>