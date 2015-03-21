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
		if(isset($_POST['action'])){
			switch($_POST['action']){
				case 'delete_item':
					switch($_POST['property']){
						case 'message' :
							$message = Message::find_by_id('id', $_POST['property_id']);
							if($message->delete()){
								echo 'Deleted Successfully';
							}else{
								echo 'Error, contact system administrator';
							}
							break;
					}
					break;
					
				case 'togglevisibility':
					$message = Message::find_by_id('id', $_POST['message_id']);
					if($message->is_show == '0'){
						$message->is_show = '1';
					}else{
						$message->is_show = '0';
					}
					if($message->save()){
						echo 'Changes Saved. Refresh the Page to see changes.';
					}
					break;
					
				case 'viewmessage':
					$message = Message::find_by_id('id', $_POST['message_id']);
					echo $message->message;
					break;
					
				case 'saveprofile':
					$user = User::find_by_id($session->user_id);
					$user->name = trim($_POST['name']);
					$user->email = trim($_POST['email']);
					if(!empty($_POST['password'])){
						$user->password = trim(sha1($_POST['password']));
					}
					
					if($user->save()){
						echo 'Changes Saved';
					}else{
						echo 'Error, contact admin';
					}
					break;
			}
		}
	}
	
?>