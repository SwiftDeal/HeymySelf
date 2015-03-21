<?php require_once $dir_public_requires.'header.php';?>
	<div id="home">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12 col-md-12 head-text" id="homediv" style="font-family:Roundhand,cursive;">
                        <h1 id="divDisp"><a href="http://www.heymyself.com">hey myself</a></h1>
						<hr style="color: #B80000" size="5" width="400">
                        <span>Hello to My future self!  Myself in the near future!</span>
                        <span>I hope you haven't forgotten me, the one who’s your creator!</span>
                        <span>I am dreaming about you, the person I want to be!</span>
                        <span>Lets see if I become what I now want to be!</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--./ HOME SECTION END -->
	
    <div id="about">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 sub-head text-center">
                    <h2  data-wow-delay="0.3s" class="wow rollIn animated" style="font-family:Roundhand,cursive;">Your future wants to hear from you! Schedule a beautiful message today!</h2>
                </div>
            </div>
			<div class="row text-center">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<form id="messageform">
						<div class="row">
							<div class="form-group col-lg-6 col-lg-offset-3 col-md-12">
								<input type="text" name="name" class="form-control" required="required" placeholder="Name">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-6 col-lg-offset-3 col-md-12">
								<input type="text" name="email" class="form-control" required="required" placeholder="Email address">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-6 col-lg-offset-3 col-md-12">
								<input type="text" name="scheduled" id="datetimepicker" class="form-control" required="required" placeholder="Choose Date & Time">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-6 col-lg-offset-3 col-md-12">
								<select class="form-control" name="type">
									<option value="private">Private</option>
									<option value="public">Public</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-6 col-lg-offset-3 col-md-12">
								<textarea name="message" class="form-control" row="5" required="required" placeholder="Message you want to schedule"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="form-group">
								<input type="hidden" name="action" value="schedule_message">
								<button type="submit" class="btn btn-success btn-lg">Schedule It!</button>
							</div>
						</div>
					</form>
				</div>
			</div>
        </div>
    </div>
    <!--./ ABOUT SECTION END -->
	
	<div id="port-folio" class="pad-top-botm" >
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 sub-head">
                    <h2  data-wow-delay="0.3s" style="font-family: Segoe, cursive;" class="wow rollIn animated" >Have you ever thought of talking to your future self?</h2>
					<p class="sub-head" style="font-family: Segoe, cursive;">Yes! You can do it in few steps! You can enjoy reading your aforethought messages in future by scheduling it with the help of a watch. The messages will be sent to you on the day and time you scheduled it. You can make your messages Public or Private</p>
                </div>
            </div>
            <div class="row" style="font-family: Segoe, cursive;">
                <div class="col-lg-6 col-md-6">
                    <div class="media wow rotateIn animated" data-wow-delay="0.2s">
                        <div class="pull-left">
                            <i class="fa fa-users fa-4x"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Public Messages</h3>
                            <p >
                                All the public messages will be shown in the “Public Read” page which will be visible to everyone. People can read it, comment on it and like it.
								You will receive intimation on the planned date and time that your message is now visible on “Public Read”.
								And yes, the messages will be shown anonymously not with your name. 
                            </p>

                        </div>
                    </div>
                </div>
				
                <div class="col-lg-6 col-md-6">
                    <div class="media wow rotateIn animated" data-wow-delay="0.4s">
                        <div class="pull-left">
                            <i class="fa fa-star-o fa-4x"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="media-heading">Private Messages</h3>
                            <p>
                                If you select the private option, you will receive your message on your personal email ID. It will not be shown anywhere else.
                            </p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row pad-top-botm wow flipInX animated" data-wow-delay="0.7s" style="font-family: Segoe, cursive;">
                <div class="col-lg-8 col-md-8 col-sm-8 " >

                    <h3><strong>How to schedule your Messages ?</strong></h3>
                    <p>
                        Enter your name under the Name box.
						Enter your email ID on which you want to receive your message.
                    </p>
                    <p>
                        Enter the subject of your message.
						Enter your message.
                    </p>
                    <p>
                        Specify the date & time you want to receive your message.
						Select either private or public by checking on the box.
						Click on “Schedule my message”.
                    </p>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4 text-center" >
                    <i class="fa fa-lightbulb-o big-icon "></i>
                </div>
            </div>
        </div>
    </div>
	
    <div id="contact" >
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                    <p class="sub-head"><strong>Why are we doing this?</strong><br>Because we believe that if someone who can truly motivate you, inspire you that is you and your past self! Send messages, Images and soon videos to your future self and get inspired!</p>

                    <p class="sub-head  wow rotateIn animated" data-wow-delay="0.4s"><strong>Who are we?</strong><br>Conceptualised and Designed by: Puneet Arora, puneet@heymyself.com</p>
                </div>
            </div>
            <div class="row  text-center wow rotateIn animated" data-wow-delay="0.4s">
                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
					<a href="https://www.facebook.com/pages/Hey-Myself/659990510786166"><img src="<?php echo $dir_assets_img;?>Social/facebook.png" alt="" /></a>
					<a href="https://plus.google.com/100447578055779780032" rel="publisher"><img src="<?php echo $dir_assets_img;?>Social/google-plus.png" alt="" /></a>
					<a href="#"><img src="<?php echo $dir_assets_img;?>Social/twitter.png" alt="" /></a>
				</div>
			</div>
        </div>
    </div>
<?php require_once $dir_public_requires.'footer.php';?>