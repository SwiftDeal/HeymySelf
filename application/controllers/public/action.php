<?php
	ob_start();
	require_once $libpath = substr(str_replace('\\', '/', __dir__), 0, -30).'library/parameters.php';
	require_once $dir_library.'initialize.php';

	if (isset($_POST['action'])) {
		switch ($_POST['action']) {
			case 'schedule_message':
				$message = new Message();
				$message->name = trim($_POST['name']);
				$message->email = trim($_POST['email']);
				$message->message = trim($_POST['message']);
				$message->type = trim($_POST['type']);
				$message->validity = '0';
				$message->is_show = '1';
				$message->access_token = rand(9, 999999);
				$message->scheduled = trim($_POST['scheduled']);
				$message->created = $time;
				
				if($message->save()){
					$to = $message->email;
					$subject = "Your Message from hey myself";
					$from = "hey myself <info@heymyself.com>";
					$message 	=<<<EMAILBODY
Hi {$message->name},<br><br>

You have Scheduled a message on {$message->scheduled}
<br><hr><br><br>
You need to verify your email ID in order to receive your scheduled message in future. Please verify it by clicking on the link:  
<a href="http://heymyself.com/confirm/{$message->id}/{$message->access_token}" style="font: bold 11px Arial; text-decoration: none; background-color: #EEEEEE; color: #333333; padding: 4px 12px 4px 6px; border-top: 1px solid #CCCCCC; border-right: 1px solid #333333; border-bottom: 1px solid #333333; border-left: 1px solid #CCCCCC;">Click to Verify.</a>

EMAILBODY;

					$headers = "From: {$from}\n";
					$headers .= "Reply-To: {$from}\n";
					$headers .= "X-Mailer: PHP/".phpversion()."\n";
					$headers .= "MIME-Version: 1.0\n";
					$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

					$result = mail($to, $subject, $message, $headers);
					if($result){ echo 'Your message has been scheduled. Please Check Your Email for Confirmation';}
					else{ echo 'Sorry, Your Message Cannot be scheduled. Server too busy';}
				}
				break;
				
			case 'confirm_message':
				$id = mysql_real_escape_string(htmlentities(trim($_GET['message_id'])));
				$access_token = mysql_real_escape_string(htmlentities(trim($_GET['access_token'])));
				
				if($message = Message::find_by_access($id, $access_token)){
					$message->validity = '1';
					$message->created = $time;
					if($message->save())
						echo $message->name.' your message has been scheduled on '.$message->scheduled.' and is successfully verified';
				}
				break;
				
			case 'loadmore_message':
				$messages = Message::find_public($_POST['limit']);
				$allmessages = Message::find_all_public();
				foreach($messages as $message){
					$message = Message::find_by_id('id', $message->id);
					echo '<p><i class="fa fa-quote-left"></i>'.substr($message->message, 0, 250).'... <i class="fa fa-quote-right"></i></p>';
					echo '<small>Scheduled on '.datetime_to_text($message->created).'</small>';
					echo '<div class="fb-like" data-href="'.strip_tags($message->message).'" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>';
					echo '<div class="fb-comments" data-href="'.strip_tags($message->message).'" data-numposts="5" data-colorscheme="light"></div>';
				}
				if(count($allmessages) > count($messages)){
					echo '<center><button id="loadmore" class="btn btn-primary btn-lg">Load More</button></center>';
				}
				break;
				
			case 'loadmessage':
				$message = Message::find_by_id('id', $_POST['message_id']);
				echo $message->message;
				break;
				
			case 'signin':
				if(!$session->is_logged_in()) {
					$email = trim($_POST['email']);
					$password = trim(sha1($_POST['password']));
					$found_user = User::authenticate($email, $password);
					if (!$found_user) {
						$user_email = User::find_by_email($email);
						if($user_email){ echo 'forgetpwd';}else{ echo 'No such email registered';}
				  	}else{
				  		$session->login($found_user);
				  		echo 'login';
				  	}
				}
				break;
		}
	}
?>