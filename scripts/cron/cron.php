<?php
	ob_start();
	error_reporting(E_ALL);
	require_once $libpath = substr(str_replace('\\', '/', __dir__), 0, -12).'library/parameters.php';
	require_once $dir_library.'initialize.php';
	$date = only_datetime($time);
	
	$messages = Message::find_active();
	foreach($messages as $message){
		$message = Message::find_by_id('id', $message->id);
		if(
			((strtotime($time)+12) <= strtotime($message->scheduled)) && 
			(strtotime($message->scheduled) <= (strtotime($time)+60*60+12))
		){
			$to_name = $message->name;
			$to = $message->email;
			$subject = "Your Message from hey myself";
			$from = "hey myself <info@heymyself.com>";
			$message 	=<<<EMAILBODY
Hi {$to_name},<br>

{$message->message}

EMAILBODY;

			$headers = "From: {$from}\n";
			$headers .= "Reply-To: {$from}\n";
			$headers .= "X-Mailer: PHP/".phpversion()."\n";
			$headers .= "MIME-Version: 1.0\n";
			$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

			$result = mail($to, $subject, $message, $headers);

			if($result){
				log_action("mail{$enddate}", 'Mail Sent', "To: {$user->name} at: {$date}");
			}else{
				log_action("error{$enddate}", 'Mail NotSent', "To: {$user->name} at: {$date}");
			}
		}
	}
?>