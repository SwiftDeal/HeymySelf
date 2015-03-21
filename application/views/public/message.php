<?php require_once $dir_public_requires.'header.php';?>
    <div class="donars-section" id="publicmessage">
        <div class="overlay">
            <div class="container">
				<div class="row text-center">
					<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
						<h2 data-wow-delay="0.3s" style="font-family: Sacramento, cursive;" class="wow rollIn animated"><strong>Message</strong></h2>
						<p class="sub-head" style="font-family: Sacramento, cursive; font-size: 40px;">Anonymous letters sent from past!</p>
					</div>
				</div>
                <div class="row ">
                    <div class="col-lg-12 col-md-12" id="loadhere">
					<?php
						if($message){
							$message = Message::find_by_id('id', $message->id);
							echo '<div class="media">
									<div class="media-body">
										<p>'.substr($message->message, 0, 250).'...<a href="message/'.$message->id.'" class="text-primary">Read More</a></p>
										<p><small><i class="fa fa-clock-o"></i> '.datetime_to_text($message->created).'</small></p>
										<p><div class="fb-like" data-href="message/'.$message->id.'" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div></p>
										<p><div class="fb-comments" data-href="message/'.$message->id.'" data-numposts="5" data-colorscheme="light"></div></p>
									</div>
								</div>';
						}
						
					?>
						
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require_once $dir_public_requires.'footer.php';?>