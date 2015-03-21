<?php require_once $dir_public_requires.'header.php';?>
    <div class="donars-section" id="publicmessage">
        <div class="overlay">
            <div class="container">
				<div class="row text-center">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
						<h2 data-wow-delay="0.3s" style="font-family: Sacramento, cursive;" class="wow rollIn animated"><strong>Public Messages</strong></h2>
						<p class="sub-head" style="font-family: Sacramento, cursive; font-size: 40px;">Anonymous letters sent from past to today!</p>
					</div>
				</div>
                <div class="row ">
                    <div class="col-lg-12 col-md-12" id="loadhere">
					<?php
						foreach($messages as $message){
							$message = Message::find_by_id('id', $message->id);
							if($message->is_show == '1'){
							echo '<div class="media">
									<div class="media-body">
										<p id="showmessage'.$message->id.'">'.substr($message->message, 0, 150).'...<a onclick="loadmessage('.$message->id.');" class="text-primary">Read More</a></p>
										<p><small><i class="fa fa-clock-o"></i> '.datetime_to_text($message->created).'</small></p>
										<p><div class="fb-like" data-href="message/'.$message->id.'" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div></p>
									</div>
								</div>';
							}
						}
						
						if ($pagination->total_pages() > 1) {
							echo '<ul class="pager">';
							if ($pagination->has_previous_page()) {
								echo '<li class="previous"><a href="messages/'.$pagination->previous_page().'">&larr; Older</a></li>';
							}
							
							if ($pagination->has_next_page()) {
								echo '<li class="next"><a href="messages/'.$pagination->next_page().'">Newer &rarr;</a></li>';
							}
							echo '</ul>';
						}
					?>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script>
		function loadmessage(message_id){
			var action = 'loadmessage';
			$.ajax({
				type: "POST",
				url: "application/controllers/public/action.php",
				data: {action: action, message_id: message_id},
				success: function(data){
					$("#showmessage"+message_id).html(data);
				}
			});
			return false;
		}
	</script>
<?php require_once $dir_public_requires.'footer.php';?>