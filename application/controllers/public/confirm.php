<?php
	ob_start();
	require_once $libpath = substr(str_replace('\\', '/', __dir__), 0, -30).'library/parameters.php';
	require_once $dir_library.'initialize.php';

	$id = mysql_real_escape_string(htmlentities(trim($_GET['message_id'])));
	$access_token = mysql_real_escape_string(htmlentities(trim($_GET['access_token'])));
	
	if($message = Message::find_by_access($id, $access_token)){
		$message->validity = '1';
		$message->created = $time;
		if($message->save())
			echo $message->name.' your message has been scheduled on '.$message->scheduled.' and is successfully verified';
	}else{
		echo 'No such message Scheduled';
	}
	
?>